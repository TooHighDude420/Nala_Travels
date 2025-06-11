<?php
require("conn.php");

class Database
{

    public function __construct()
    {
        Conn::makeCon();
    }

    public function search(string $departure = '', string $destination ='', string $grp = '2')
    {
        $stmt = Conn::$conn->prepare("
            SELECT trip.TripID, flights.Destination, flights.Departure, flights.FreeSeats, flights.Price, countries.ImageLoc, countries.CountryDisc
            FROM trip 
            INNER JOIN flights ON trip.FlightID=flights.FlightID 
            INNER JOIN countries ON flights.Destination=countries.Airport
            WHERE Destination=:a OR Departure=:d AND FreeSeats>:grp");
        $stmt->bindParam("d", $departure);
        $stmt->bindParam("a", $destination);
        $stmt->bindParam("grp", $grp);
        $stmt->execute();
        $res = $stmt->fetchAll();

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