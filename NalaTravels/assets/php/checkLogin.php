<?php
if(isset($_POST["data"])){
    $data = $_POST['data'];
} else {
    $data = $_GET['data'];
}

isset($_SESSION) ? : session_start();

isset($_SESSION['username']) ?  header("location: ../../index.php?page=book&data=$data") : header("location: ../../index.php?page=login");