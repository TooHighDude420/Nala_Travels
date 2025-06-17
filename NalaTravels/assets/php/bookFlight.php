<?php
require("database.php");

$db = new Database();

isset($_SESSION) ?: session_start();

$encdata = $_GET['data'];

$data = json_decode($encdata);

var_dump($data);

$dep = $data[0];
$des = $data[1];

$dataUser = $db->getDataFromUser($_SESSION["username"]);

$fname = $dataUser["fName"];
$lName = $dataUser["lName"];

$db->bookFlight(
    $_SESSION["username"],
    $fname,
    $lName,
    $des,
    $dep
);