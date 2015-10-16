<?php
if (!class_exists('query')) {
    class QUERY
    {
        public function get_trips($origin,$destination,$date,$time)
        {
            global $db;
            $query1 = "
                    SET @orig = (SELECT settelmentID FROM locations WHERE locations.settelment LIKE '$origin'),
                    @couns = (SELECT councilID FROM locations WHERE locations.settelment LIKE '$origin'),
                    @town = (SELECT townID FROM locations WHERE locations.settelment LIKE '$origin'),
                    @regu = (SELECT regionID FROM locations WHERE locations.settelment LIKE '$origin'),
                    @dest = (SELECT settelmentID FROM locations WHERE locations.settelment LIKE '$destination'),
                    @Dcouns = (SELECT councilID FROM locations WHERE locations.settelment LIKE '$destination'),
                    @Dtown = (SELECT townID FROM locations WHERE locations.settelment LIKE '$destination'),
                    @Dregu = (SELECT regionID FROM locations WHERE locations.settelment LIKE '$destination');";
            $query = "select  tr.id,
                      (SELECT locations.settelment FROM locations WHERE locations.settelmentID = tr.originS) AS originS,
                      (SELECT locations.settelment FROM locations WHERE locations.settelmentID = tr.stopsS) AS stopsS,
                      (SELECT locations.settelment FROM locations WHERE locations.settelmentID = tr.stop2S) AS stop2S,
                      (SELECT locations.settelment FROM locations WHERE locations.settelmentID = tr.stop3S) AS stop3S,
                      (SELECT locations.settelment FROM locations WHERE locations.settelmentID = tr.destinationS ) AS destinationS,
                      tr.name,tr.phone,tr.date,tr.periodic,tr.sun,tr.mon,tr.tue,tr.wed,tr.thu,tr.fri,tr.sat,tr.time,tr.price,
                      tr.remarks,tr.petfriendly,tr.noAc,tr.smoker FROM

                      (select * FROM  (select * from trips_locations where (('$date' = trips_locations.date and trips_locations.time >= '$time')or trips_locations.periodic =1) and (originS = @orig OR stopsS = @rig or stop2S = @orig or stop3S = @orig
                      or originS = @couns or stopsC = @couns or stop2C = @couns or stop3C = @couns or originT = @town or stopsT = @town
                      or stop2T = @town or stop3T = @town or originR = @regu or stopsR = @regu or stop2R = @regu or stop3R = @regu))as t
                    
                      WHERE  t.destinationS = @dest or t.stopsS = @dest or t.stop2S = @dest or t.stop3S = @dest
                      or t.destinationC = @Dcouns or t.stopsC = @Dcouns or t.stop2C = @Dcouns or t.stop3C = @Dcouns
                      or t.destinationT = @Dtown or t.stopsT = @Dtown or t.stop2T = @Dtown or t.stop3T = @Dtown
                      or t.destinationR = @Dregu or t.stopsR = @Dregu or t.stop2R = @Dregu or t.stop3R = @Dregu ) as tr order by tr.time asc;
                      
            ";
            $db->connaction->query($query1);
            $result = $db->connaction->query($query);
            while ($obj = $result->fetch_object()) {
                $trips[] = $obj;
            }
            return $trips;
        }
        public function locations()
        {
            global $db;
            $query = "SELECT locations.settelment FROM locations";
            $result = $db->connaction->query($query);
            while ($obj = $result->fetch_object()) {
                $locations[] = $obj;
            }
            return $locations;
        }
        public function validate_sett($sett)
        {
            global $db;
            $query = "SELECT locations.id FROM locations WHERE settelment like '$sett'";
            $result = $db->connaction->query($query);
            return $result;
        }

        public function delete_trip($name,$phone,$password)
        {
            global $db;
            $query = "delete from trips_locations WHERE trips_locations.name like '$name' and trips_locations.phone like '$phone' and pass = '$password'";
            $result = $db->connaction->query($query);
            return $result;
        }
        public function kruatoen()
        {
            global $db;
            $query = "delete from trips_locations
where (`periodic` = 0 AND `date` < SUBDATE( CURDATE( ) , 1 ))
or (`periodic` = 1 AND `date` < SUBDATE( CURDATE( ) , 30 ))
";
            $result = $db->connaction->query($query);
            return $result;
        }
    }
}
require_once 'class-db.php';

$query = new QUERY;





