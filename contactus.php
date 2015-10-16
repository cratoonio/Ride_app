<?php
include 'include/class-insert.php';
if(!empty($_POST['complaints'])){
    $insert->comment($_POST['complaints'],date("Y-m-d") );
}else{
    echo "כאילו צריך לכתוב משהו כדי שנבין. אותך. סבבה?";
}
