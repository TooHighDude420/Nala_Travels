<?php
$departure = $_POST["departure"];
$destination = $_POST["arrival"];
$people = $_POST["groupSize"];

header("location: ../../index.php?page=search&d=$departure&a=$destination&p=$people");