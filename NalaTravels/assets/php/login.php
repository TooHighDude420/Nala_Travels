<?php
session_start();

require("database.php");

$username = $_POST['username'];
$password = $_POST['password'];

$db = new Database();

$results = $db->login($username);

if (sizeof($results) == 0) {
    echo "user not found";
} else {
    if (password_verify($password, $results[0]['password'])) {
        echo "login succesfull";
        $_SESSION["loggedIn"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["role"] = $results[0]['RoleID'];

        header("location:../../index.php?page=dashboard");
    } else {
        echo "wrong password";
    }
}