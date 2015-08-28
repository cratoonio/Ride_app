<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include "include/class-query.php";

$result = $query->get_locations();

echo($result);
