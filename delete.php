<?php
include "include/class-query.php";
$result = $_POST;
if(!empty($result['name'])) {
    if (!empty($result['phone'])) {
        if (!empty($result['password'])) {
                $query->delete_trip($result['name'],$result['phone'],$result['password']);
        }else{
            echo "input wrong!";
        }
    } else{
        echo "input wrong!";
    }
}else{
    echo "input wrong!";
}

