<?php
$departure = $_POST["departure"];
$destination = $_POST["arrival"];
$people = $_POST["groupSize"];
$date = $_POST["date"];

header("location: ../../index.php?page=search&d=$departure&a=$destination&p=$people&dt=$date");