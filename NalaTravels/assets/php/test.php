<?php
session_start();

require("database.php");

$database = new Database();

// Lees JSON vanuit de body
$json = file_get_contents("php://input");
$data = json_decode($json, true);

var_dump($data);

try {
    foreach ($data as $i) {
        $database->bookFlight(
            $i['idHolder'],
            $i['fName'],
            $i['lName'],
            $i['des'],
            $i['dep']
        );

        echo  "succes\n";
    }

    $userData = $database->getDataFromUser($_SESSION['username']);

    mail($userData[0]['email'], "vlucht succesvol geboekt", "uw vlucht naar $des is succesvol geboekt");
    
} catch (PDOException $e){
    echo "error:" . $e->getMessage();
}