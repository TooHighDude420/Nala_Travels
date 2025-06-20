<?php
isset($_SESSION) ? : session_start();

if (isset($_SESSION["username"])){
    $un = $_SESSION["username"];
}

echo "welkom op het dashboard $un";
?>