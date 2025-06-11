<?php
require("conn.php");

class Database
{
    public function __construct()
    {
        Conn::makeCon();
    }

    public function search(string $departure, string $destination, string $grp)
    {
        $stmt = Conn::$conn->prepare("
            SELECT trip.TripID, flights.Destination, flights.Departure, flights.FreeSeats, flights.Price, countries.ImageLoc, countries.CountryDisc
            FROM trip 
            INNER JOIN flights ON trip.FlightID=flights.FlightID 
            INNER JOIN countries ON flights.Destination=countries.Airport
            WHERE (Destination=:a OR Departure=:d) OR CountryName=:dalt AND FreeSeats>:grp");
        $stmt->bindParam("d", $departure);
        $stmt->bindParam("dalt", $destination);
        $stmt->bindParam("a", $destination);
        $stmt->bindParam("grp", $grp);
        $stmt->execute();
        $res = $stmt->fetchAll();

        return $res;
    }

    public function bookFlight($username, $fName, $lName, $des, $dep)
    {
        $stmt = Conn::$conn->prepare("
            INSERT INTO traveler (userID, Fname, Lname) VALUES (:userID, :fname, :lname);
            INSERT INTO trips_travelers (travelerID, tripID) VALUES (:travelerID, :tripID);
        ");
        
        $userID = $this->getUserID($username);
        $flightID = $this->getFlightID($des, $dep);
        $travelerID = $this->getTravelerID($fName, $lName, $userID);
        $tripID = $this->getTripID($flightID);

        $stmt->bindParam("userID", $userID);
        $stmt->bindParam("travelerID", $travelerID);
        $stmt->bindParam("tripID", $tripID);
        $stmt->bindParam("fname", $fName);
        $stmt->bindParam("lname", $lName);
        $stmt->execute();
    }

    public function getTripID($flightID)
    {
        $stmt = Conn::$conn->prepare("SELECT tripID FROM trip WHERE flightID = :flightID;");
        $stmt->bindParam("flightID", $flightID);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function getTravelerID($fName, $lName, $userID)
    {
        $stmt = Conn::$conn->prepare("SELECT travelerID FROM traveler WHERE Fname=:fname AND Lname=:lname AND userID = :userID;");
        $stmt->bindParam("userID", $userID);
        $stmt->bindParam("fname", $fName);
        $stmt->bindParam("lname", $lName);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function getFlightID($des, $dep)
    {
        $stmt = Conn::$conn->prepare("SELECT flightID FROM flights WHERE Destination = :destination AND Departure = :departure;");
        $stmt->bindParam("destination", $des);
        $stmt->bindParam("departure", $dep);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function getUserID($username)
    {
        $stmt = Conn::$conn->prepare("SELECT userID FROM users WHERE username = :username");
        $stmt->bindParam("username", $username);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;

    }

    public function insertUser($username, $password, $role)
    {
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);
        $stmt = Conn::$conn->prepare("INSERT INTO Users (`Username`, `Password`, `RoleID`) VALUES (:username, :password, :role)");
        $stmt->bindParam("username", $username);
        $stmt->bindParam("password", $hashedPass);
        $stmt->bindParam("role", $role);
        $stmt->execute();
    }

    public function login($username)
    {
        $sth = Conn::$conn->prepare("SELECT username, password, RoleID FROM users WHERE username = :user");
        $sth->bindParam('user', $username, PDO::PARAM_STR);
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }
}