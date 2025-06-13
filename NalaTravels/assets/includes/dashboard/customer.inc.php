<?php
if (isset($_GET["sp"])){
    $subpage = $_GET["sp"];
} else {
    $subpage = "home";
}

include "assets/includes/dashboard/customer/$subpage.inc.php";