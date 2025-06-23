<?php
session_start();

require("database.php");

$database = new Database();

// Lees JSON vanuit de body
$json = file_get_contents("php://input");
$data = json_decode($json, true);

try {
    foreach ($data as $i) {
        $database->bookFlight(
            $_SESSION['username'],
            $i['fName'],
            $i['lName'],
            $i['des'],
            $i['dep']
        );

        echo  "succes\n";
    }
} catch (PDOException $e){
    echo "error:" . $e->getMessage();
}