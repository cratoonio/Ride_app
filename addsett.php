<?php
include 'include/class-insert.php';
include 'include/class-query.php';
$result = $query->validate_sett($_POST['newSett']);
if(!empty($_POST['newSett'])){
    if($result->num_rows){
        echo "already have it";
    }else{
        $insert->add_set($_POST['newSett'],$_POST['town']);
    }


}
