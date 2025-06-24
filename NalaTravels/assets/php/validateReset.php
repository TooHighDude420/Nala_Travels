<?php
require "database.php";

$database = new Database();

$res = $database->validateReset($_POST['fName'], $_POST['lName'], $_POST['email'], $_POST['username']);
$id = $res[0]['UserID'];

if ($res != null){
    header("location: ../../index.php?page=resetpw&id=$id");
}