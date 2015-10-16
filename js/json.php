<?php

header('Content-Type: text/html; charset=utf-8'); 
include 'include/class-query.php';
$loc = $query->locations();
if(!empty($loc)){
print_r(json_encode($loc,JSON_UNESCAPED_UNICODE));}
else{
    echo "no data Uploaded";
}