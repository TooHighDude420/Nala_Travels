<?php
require("conn.php");

class Database
{
    public function __construct()
    {
        Conn::makeCon();
    }

    /**
     * Summary of getDataFromUser
     * @param string $username the username of the user you want the data from
     */
    public function getDataFromUser(string $username)
    {
        $stmt = Conn::$conn->prepare("
            SELECT * FROM users
            WHERE username = :username
        ");

        $stmt->bindParam("username", $username);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function getStarData()
    {
        $stmt = Conn::$conn->prepare("
            SELECT stars FROM reviews
            WHERE valid = 1
        ");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function getFlights()
    {
        $stmt = Conn::$conn->prepare("SELECT * FROM flights");

        $stmt->execute();

        $res = $stmt->fetchAll();

        return $res;
    }

    public function getCars()
    {
        $stmt = Conn::$conn->prepare("
            SELECT car.CarID, countries.CountryName, car.Price FROM car
            INNER JOIN countries ON car.CountryID=countries.CountryID
        ");

        $stmt->execute();

        $res = $stmt->fetchAll();

        return $res;
    }

    public function getUserRelBookings(int $userID)
    {
        $stmt = Conn::$conn->prepare("
            SELECT traveler.Fname, traveler.Lname, flights.Destination, flights.Departure, trip.DateTime FROM trips_travelers
            INNER join traveler ON trips_travelers.TravelerID = traveler.TravelerID
            INNER JOIN trip ON trips_travelers.TripID = trip.TripID
            INNER JOIN flights ON trip.FlightID = flights.FlightID
            WHERE traveler.UserID = :userID
        ");

        $stmt->bindParam("userID", $userID);
        $stmt->execute();

        $res = $stmt->fetchAll();

        return $res;
    }

    public function getValidReviews()
    {
        $stmt = Conn::$conn->prepare("
            SELECT * FROM reviews WHERE valid=1
        ");

        $stmt->execute();

        $res = $stmt->fetchAll();

        return $res;
    }

    public function getReviewsForValidation()
    {
        $stmt = Conn::$conn->prepare("
            SELECT * FROM reviews WHERE valid=0
        ");

        $stmt->execute();

        $res = $stmt->fetchAll();

        return $res;
    }

    public function insertReview(string $name, string $subject, string $message)
    {
        $stmt = Conn::$conn->prepare("
            INSERT INTO reviews (name, subject, message, valid) VALUES (:name, :subject, :message, 0)
        ");

        $stmt->bindParam("name", $name);
        $stmt->bindParam("subject", $subject);
        $stmt->bindParam("message", $message);

        $stmt->execute();
    }

    public function validateReview($reviewID)
    {
        $stmt = Conn::$conn->prepare("
            UPDATE reviews SET valid = 1 WHERE reviewID=:reviewID
        ");

        $stmt->bindParam("reviewID", $reviewID);

        $stmt->execute();
    }

    public function deleteReview($reviewID)
    {
        $stmt = Conn::$conn->prepare("
            DELETE FROM reviews WHERE reviewID=:reviewID
        ");

        $stmt->bindParam("reviewID", $reviewID);

        $stmt->execute();
    }

    public function getHotels()
    {
        $stmt = Conn::$conn->prepare("
        SELECT hotel.HotelID, countries.CountryName, hotel.Price FROM hotel
        INNER JOIN countries ON hotel.CountryID=countries.CountryID
        ");

        $stmt->execute();

        $res = $stmt->fetchAll();

        return $res;
    }

    /**
     * Summary of search
     * @param string $departure the departure airport
     * @param string $destination the destination airport
     * @param string $grp size of the group
     */
    public function search(string $departure, string $destination, string $grp)
    {
        $stmt = Conn::$conn->prepare("
            SELECT trip.TripID, flights.Destination, flights.Departure, flights.FreeSeats, flights.Price, c1.ImageLoc, c1.CountryDisc
            FROM trip 
            INNER JOIN flights ON trip.FlightID=flights.FlightID 
            INNER JOIN countries AS c1 ON flights.Destination=c1.Airport
            INNER JOIN countries AS c2 ON flights.Departure=c2.Airport
            WHERE ((flights.Destination=:a OR flights.Departure=:d) OR (c1.CountryName=:dalt OR c2.CountryName=:depalt)) AND FreeSeats>:grp;");

        $stmt->bindParam("d", $departure);
        $stmt->bindParam("dalt", $destination);
        $stmt->bindParam("depalt", $departure);
        $stmt->bindParam("a", $destination);
        $stmt->bindParam("grp", $grp);

        $stmt->execute();

        $res = $stmt->fetchAll();

        return $res;
    }

    /**
     * Summary of getDataForCards
     */
    public function getDataForCards()
    {
        $stmt = Conn::$conn->prepare("
        SELECT trip.tripID, flights.FreeSeats, flights.price, countries.CountryName, countries.CountryDisc, countries.ImageLoc, flights.destination, flights.departure
        FROM trip
        INNER JOIN flights ON trip.FlightID = flights.FlightID
        INNER JOIN countries ON flights.Destination = countries.Airport");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    /**
     * Summary of getDealDataForCards
     */
    public function getDealDataForCards()
    {
        $stmt = Conn::$conn->prepare("
        SELECT trip.tripID, flights.FreeSeats, deals.price, deals.dealName, countries.CountryDisc, countries.ImageLoc
        FROM deals
        INNER JOIN trip ON deals.tripID = trip.TripID
        INNER JOIN flights ON trip.FlightID = flights.FlightID
        INNER JOIN countries ON flights.Destination = countries.Airport");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    /**
     * Summary of bookFlight
     * @param string $username
     * @param string $fName
     * @param string $lName
     * @param string $des
     * @param string $dep
     * @return void
     */
    public function bookFlight(string $userID, string $fName, string $lName, string $des, string $dep)
    {
        $stmt = Conn::$conn->prepare("
            INSERT IGNORE INTO traveler (userID, Fname, Lname) VALUES (:userID, :fname, :lname);
            SELECT travelerID INTO @travelID FROM traveler WHERE userID=:userID AND fName=:fname AND lName=:lname;
            SELECT flightID INTO @flightID FROM flights WHERE destination=:destination AND departure=:departure;
            SELECT tripID INTO @tripID FROM trip WHERE flightID=@flightID;
            INSERT IGNORE INTO trips_travelers (travelerID, tripID) VALUES (@travelID, @tripID);
        ");

        $stmt->bindParam("userID", $userID);
        $stmt->bindParam("destination", $des);
        $stmt->bindParam("departure", $dep);
        $stmt->bindParam("fname", $fName);
        $stmt->bindParam("lname", $lName);
        $stmt->execute();
    }

    /**
     * Summary of getTripID
     * @param int $flightID
     */
    public function getTripID(int $flightID)
    {
        $stmt = Conn::$conn->prepare("SELECT tripID FROM trip WHERE flightID = :flightID;");

        $stmt->bindParam("flightID", $flightID);

        $stmt->execute();

        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    /**
     * Summary of getTravelerID
     * @param string $fName
     * @param string $lName
     * @param int $userID
     */
    public function getTravelerID(string $fName, string $lName, int $userID)
    {
        $stmt = Conn::$conn->prepare("SELECT travelerID FROM traveler WHERE Fname=:fname AND Lname=:lname AND userID = :userID;");
        $stmt->bindParam("userID", $userID);
        $stmt->bindParam("fname", $fName);
        $stmt->bindParam("lname", $lName);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    /**
     * Summary of getFlightID
     * @param string $des
     * @param string $dep
     */
    public function getFlightID(string $des, string $dep)
    {
        $stmt = Conn::$conn->prepare("SELECT flightID FROM flights WHERE Destination = :destination AND Departure = :departure;");
        $stmt->bindParam("destination", $des);
        $stmt->bindParam("departure", $dep);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    /**
     * Summary of getUserID
     * @param string $username
     */
    public function getUserID(string $username)
    {
        $stmt = Conn::$conn->prepare("SELECT userID FROM users WHERE username = :username");
        $stmt->bindParam("username", $username);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;

    }

    /**
     * Summary of insertUser
     * @param string $username
     * @param string $password
     * @param int $role
     * @return void
     */
    public function insertUser(string $username, string $password, int $role)
    {
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);
        $stmt = Conn::$conn->prepare("INSERT INTO Users (`Username`, `Password`, `RoleID`) VALUES (:username, :password, :role)");
        $stmt->bindParam("username", $username);
        $stmt->bindParam("password", $hashedPass);
        $stmt->bindParam("role", $role);
        $stmt->execute();
    }

    /**
     * Summary of login
     * @param string $username
     */
    public function login(string $username)
    {
        $sth = Conn::$conn->prepare("SELECT username, password, RoleID FROM users WHERE username = :user");
        $sth->bindParam('user', $username, PDO::PARAM_STR);
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function validateReset($fname, $lname, $email, $username)
    {
        $sth = Conn::$conn->prepare("SELECT * FROM users WHERE fName = :fname AND lName = :lname AND email = :email AND username = :user");

        $sth->bindParam('fname', $fname);
        $sth->bindParam('lname', $lname);
        $sth->bindParam('email', $email);
        $sth->bindParam('user', $username);

        $sth->execute();

        $res = $sth->fetchAll(PDO::FETCH_ASSOC);

        if (sizeof($res) == 0) {
            return null;
        } else {
            return $res;
        }
    }

    public function updatePassword(string $userID, string $value)
    {
        $hashedPass = password_hash($value, PASSWORD_DEFAULT);

        $sth = Conn::$conn->prepare("UPDATE users SET password=:pass WHERE userID = :userID");

        $sth->bindParam('pass', $hashedPass);
        $sth->bindParam('userID', $userID);

        $sth->execute();
    }

    public function getTrips()
    {
        $sth = Conn::$conn->prepare("
            SELECT trip.tripID, f.Destination, f.Departure, f.FreeSeats, f.Price, trip.DateTime, h.HotelID, c.CarID, co.CountryName FROM trip
            LEFT JOIN flights AS f ON trip.FlightID=f.FlightID
            LEFT JOIN hotel AS h ON trip.HotelID=h.HotelID
            LEFT JOIN car AS c ON trip.CarID=c.CarID
            LEFT JOIN countries AS co ON h.CountryID=co.CountryID
        ");

        $sth->execute();

        $res = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function deleteTrip($id)
    {
        $sth = Conn::$conn->prepare("
            DELETE FROM trip WHERE tripID=:id
        ");

        $sth->bindParam('id', $id);

        $sth->execute();
    }

    public function updateTrip($price, $id)
    {
        $sth = Conn::$conn->prepare("
            SELECT FlightID FROM trip WHERE tripID = :id INTO @fID;
            UPDATE flights SET price =:price WHERE flightID = @fID
        ");

        $sth->bindParam('id', $id);
        $sth->bindParam('price', $price);

        $sth->execute();
    }

    public function getBookedTrips()
    {
        $sth = Conn::$conn->prepare("
            SELECT tt.Trips_TravelersID, f.Destination, f.Departure, tr.Fname, tr.Lname, c.CarID, h.HotelID
            FROM trips_travelers  AS tt
            INNER JOIN trip AS t ON t.TripID=tt.TripID
            INNER JOIN flights AS f ON f.FlightID=t.FlightID
            INNER JOIN traveler AS tr ON tr.TravelerID=tt.TravelerID
            LEFT JOIN hotel AS h ON t.HotelID=h.HotelID
            LEFT JOIN car AS c ON t.CarID=c.CarID
        ");

        $sth->execute();

        $res = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function deleteBooking($trips_travelersID)
    {
        $sth = Conn::$conn->prepare("
            DELETE FROM trips_travelers WHERE Trips_TravelersID=$trips_travelersID
        ");

        $sth->execute();
    }
}