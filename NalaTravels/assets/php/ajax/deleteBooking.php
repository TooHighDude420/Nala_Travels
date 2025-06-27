<?php
require("../database.php");

$database = new Database();

(int) $id = $_POST['id'];

$database->deleteBooking($id);