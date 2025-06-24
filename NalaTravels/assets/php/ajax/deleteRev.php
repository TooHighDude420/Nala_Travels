<?php

require("../database.php");

$revID = $_POST['holder'];

$database= new Database();

$database->deleteReview($revID);
