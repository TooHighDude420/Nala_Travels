<?php
require("../database.php");

$database = new Database();

$cd = $database->getDataForCards();

$encData = json_encode($cd);

echo $encData;