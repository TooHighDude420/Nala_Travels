<?php
require("database.php");

$db = new Database();

$db->insertUser(
    $_POST["username"],
    $_POST["password"],
    2
);

header("location: ../../index.php?page=login");