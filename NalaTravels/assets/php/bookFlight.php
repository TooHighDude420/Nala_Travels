<?php
require("database.php");

$db = new Database();

isset($_SESSION) ? : session_start();

$encdata = $_GET['data'];

$data = json_decode($encdata);

var_dump($data);

$dep = $data[0];
$des = $data[1];
$price = $data[2];
$free = $data[3];
$imgLoc = $data[4];
$grpSize = $data[5];

$db->bookFlight(
    $_SESSION["username"],
    "Nataro",
    "Ajaouin",
    $des,
    $dep
);