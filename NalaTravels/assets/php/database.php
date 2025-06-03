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
            WHERE Destination=:d AND Departure=:a AND FreeSeats>:grp");
        $stmt->bindParam("d", $departure);
        $stmt->bindParam("a", $destination);
        $stmt->bindParam("grp", $grp);
        $stmt->execute();
        $res = $stmt->fetchAll();

        return $res;
    }
}