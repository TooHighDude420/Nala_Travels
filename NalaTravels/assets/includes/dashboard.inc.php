<?php
$un = $_SESSION["username"];
$role = $_SESSION["role"];

if (isset($role)) {
    switch ($role) {
        case 1:
            include "assets/includes/dashboard/customer.inc.php";
            break;

        case 2:
            include "assets/includes/dashboard/admin.inc.php";
            break;

    }
} else {
    header("location:index.php?page=home");
}

