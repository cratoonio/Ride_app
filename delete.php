<?php
include "include/class-query.php";
$result = $_POST;
if(!empty($result['name'])) {
    if (!empty($result['phone'])) {
        if (!empty($result['password'])) {
                $query->delete_trip($result['name'],$result['phone'],$result['password']);
        }else{
            echo "לא הוכנסה סיסמא";
        }
    } else{
        echo "לא הוכנס מספר טלפון";
    }
}else{
    echo "לא הוכנס שם";
}

