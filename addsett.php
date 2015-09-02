<?php
include 'include/class-insert.php';
include 'include/class-query.php';

if(!empty($_POST['newSett'])){
    if($query->validate_sett($_POST['newSett'])){
    echo "already have it";
    }else{
        $insert->add_set($_POST['newSett'],$_POST['town']);
    }


}
