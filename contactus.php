<?php
include 'include/class-insert.php';
if(!empty($_POST['complaints'])){
    $insert->comment($_POST['complaints'],date("Y-m-d") );
}else{
    echo "Hay.. it empty";
}
