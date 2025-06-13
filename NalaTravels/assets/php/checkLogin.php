<?php
$data = $_POST['data'];

isset($_SESSION) ? : session_start();

var_dump($_SESSION);

isset($_SESSION['username']) ?  header("location: bookFlight.php?data=$data") : header("location: ../../index.php?page=login");