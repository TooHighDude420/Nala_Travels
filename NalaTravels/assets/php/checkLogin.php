<?php
if(isset($_POST["data"])){
    $data = $_POST['data'];
} else {
    $data = json_decode($_GET['data']);
}

$dataDec = iterator_to_array((Array)$data, true);

var_dump($dataDec);


isset($_SESSION) ? : session_start();

isset($_SESSION['username']) ?  header("location: bookFlight.php?data=$data") : header("location: ../../index.php?page=login");