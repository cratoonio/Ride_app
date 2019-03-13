<?php
require_once('class-db.php');
if (!class_exists('INSERT')) {
    class INSERT
    {
        public function give($origin,$price,$stops,$stop2,$stop3,$destination,$date,$name,$phone,$remarks,$petFriendly,
                             $noAC,$smoker,$Periodic,$sun,$mon,$tue,$wed,$thu,$fri,$sat,$time,$pass)
        {
            global $db;

            $query = "
                  INSERT INTO trips (origin, destination, stops, stop2, stop3, name, phone, date, periodic, sun, mon, tue,
                   wed, thu, fri, sat, time, price, remarks, petfriendly, noAc, smoker, pass)
                  VALUES ('$origin','$destination','$stops','$stop2','$stop3','$name','$phone','$date','$Periodic','$sun'
                  ,'$mon','$tue','$wed','$thu','$fri','$sat',$time,'$price','$remarks','$petFriendly','$noAC',
                  '$smoker','$pass')";
            return $db->insert($query);
        }
        public function comment($comment,$time)
        {
            global $db;

            $query = "
                  INSERT INTO contect_us (comment,date)VALUES ('$comment','$time')";

            return $db->insert($query);
        }
        public function add_set($new_loc,$town)
        {
            global $db;

            $query = "
                  INSERT INTO locations  ( settelment, nameEN, settelmentID, council, councilID, town, townID, region, regionID, bigregion, updateID)
                  SELECT '$new_loc', nameEN, (select locations.id+1 FROM locations ORDER BY locations.id DESC LIMIT 1) AS settelmentID, council, councilID, town, townID, region, regionID,bigregion,(666) as updateID
                   FROM locations WHERE locations.settelment like '$town'";

            return $db->insert($query);
        }
    }
}
$insert = new INSERT;

