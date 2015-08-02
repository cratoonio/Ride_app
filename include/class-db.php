<?php
if(!class_exists('DB')){
    class DB{
        public function __construct(){
            $mysqli = new mysqli('localhost','root','root','Ultron_DB');

            if($mysqli->connect_errno){
                printf("connection failed %s\n",$mysqli->connect_error);
            }
            $this->connaction = $mysqli;

        }
        public function insert($query){

            $result = $this->connaction->query($query);
            return $result;
        }

    }
}
$db = new DB;




