<?php
require("database.php");

$db = new Database();

isset($_SESSION) ?: session_start();

$encdata = $_GET['data'];

$data =  json_decode($encdata);

$dataUser = $db->getDataFromUser($_SESSION["username"]);

$dep = $data[0];
$des = $data[1];
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