<?php
isset($_SESSION) ? : session_start();

$un = $_SESSION["username"];
$role = $_SESSION["role"];

if (isset($role)) {
    switch ($role) {
        case 2:
            include "assets/includes/dashboard/customer.inc.php";
            break;

        case 1:
            include "assets/includes/dashboard/admin.inc.php";
            break;

        default:
            include "assets/includes/dashboard/error.inc.php";
            break;

    }
} else {
    header("location:index.php?page=home");
}

