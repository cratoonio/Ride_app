<?php
include 'include/class-insert.php';
include 'include/class-query.php';
$result = $query->validate_sett($_POST['newSett']);
if(!empty($_POST['newSett'])){
    if($result->num_rows){
        echo "ישוב קיים ברשימה";
    }else{
        $insert->add_set($_POST['newSett'],$_POST['town']);
    }
}else{
    echo "There was a problem with the upload";
}
