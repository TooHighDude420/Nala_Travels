<?php
    if(isset($_GET["sp"])){
        $subpage = $_GET["sp"];
    } else {
        $subpage = "home";
    }

    include "admin/$subpage.inc.php";
?>