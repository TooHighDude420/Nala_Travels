<?php
require("database.php");

$database = new Database();

$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$database->insertReview(
    $name,
    $subject,
    $message
);

header("location: ../../index.php?page=review");