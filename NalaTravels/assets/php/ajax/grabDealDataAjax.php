<?php
require("../database.php");

$database = new Database();

$cd = $database->getDealDataForCards();

$encData = json_encode($cd);

echo $encData;