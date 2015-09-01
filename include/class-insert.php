<?php
require_once('class-db.php');
if (!class_exists('INSERT')) {
    class INSERT
    {
        public function give($origin,$price,$stops,$stop2,$stop3,$destination,$date,$name,$phone,$remarks,$petFriendly,
                             $noAC,$smoker,$Periodic,$sun,$mon,$tue,$wed,$thu,$fri,$sat,$time)
        {
            global $db;

            $query = "
                  INSERT INTO trips (origin, destination, stops, stop2, stop3, name, phone, date, periodic, sun, mon, tue,
                   wed, thu, fri, sat, time, price, remarks, petfriendly, noAc, smoker, pass)
                  VALUES ('$origin','$destination','$stops','$stop2','$stop3','$name','$phone','$date','$Periodic','$sun'
                  ,'$mon','$tue','$wed','$thu','$fri','$sat','$time','$price','$remarks','$petFriendly','$noAC',
                  '$smoker','')";
            return $db->insert($query);
        }
        public function comment($comment,$time)
        {
            global $db;

            $query = "
                  INSERT INTO contect_us (comment,date)VALUES ('$comment','$time')";

            return $db->insert($query);
        }
    }
}
$insert = new INSERT;

