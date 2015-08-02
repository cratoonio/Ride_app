<?php
require_once('class-db.php');
if(!class_exists('INSERT')){
    class INSERT{
        public function post($username,$email,$password){
            global $db;
            $query = "
                  INSERT INTO users (name,email,password,is_active)
                  VALUES ('$username','$email','$password','0')
            ";
            return $db->insert($query);
        }
    }
}
$insert = new INSERT;

