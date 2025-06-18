<?php
require("database.php");

$db = new Database();

isset($_SESSION) ?: session_start();

$encdata = $_GET['data'];

$data =  json_decode($encdata);


$dataUser = $db->getDataFromUser($_SESSION["username"]);

$dep = $data[1];
$des = $data[2];
$fname = $dataUser[0]["fName"];
$lName = $dataUser[0]["lName"];
$un = $_SESSION['username'];

$db->bookFlight(
    $un,
    $fname,
    $lName,
    $des,
    $dep
);