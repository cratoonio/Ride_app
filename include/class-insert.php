<?php
require_once('class-db.php');
if (!class_exists('INSERT')) {
    class INSERT
    {
        public function give($origin,$price,$stops,$stop2,$stop3,$destination,$date,$name,$phone,$remarks,$petFriendly,
                             $noAC,$carefulDriver,$Periodic,$sun,$mon,$tue,$wed,$thu,$fri,$sat,$time)
        {
            global $db;

            $query = "
                  INSERT INTO trips (origin, destination, stops, stop2, stop3, name, phone, date, periodic, sun, mon, tue,
                   wed, thu, fri, sat, time, price, remarks, petfriendly, noAc, carfulDriver, pass)
                  VALUES ('$origin','$destination','$stops','$stop2','$stop3','$name','$phone','$date','$Periodic','$sun'
                  ,'$mon','$tue','$wed','$thu','$fri','$sat','$time','$price','$remarks','$petFriendly','$noAC',
                  '$carefulDriver','')";
            return $db->insert($query);
        }
    }
}
$insert = new INSERT;

