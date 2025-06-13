<?php
class Conn
{
    public static $conn;

    public static function makeCon() :void
    {
        if (isset(Conn::$conn) == false) {
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "Nala";

            try {
                Conn::$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                Conn::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }

    public static function closeCon(){
        unset($conn);
    }
}
