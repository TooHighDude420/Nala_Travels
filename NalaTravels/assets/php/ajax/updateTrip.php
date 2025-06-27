<?php
require("../database.php");

$database = new Database();

(int) $id = $_POST['id'];
(double) $price = $_POST['price'];

$database->updateTrip($price, $id);