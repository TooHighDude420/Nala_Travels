<?php

require "database.php";

$database = new Database();

$pass = $_POST["password"];
$passRep = $_POST["passwordRep"];
$id = $_POST['id'];

if ($pass != $passRep){
    header("location: ../../index.php?page=resetpw&id=$id");
} else {
    $database->updatePassword($id, $pass);
    header("location: ../../index.php?page=login");
}