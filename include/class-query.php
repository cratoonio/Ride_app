<?php
if (!class_exists('query')) {
    class QUERY
    {
        public function get_trips($origin,$destination)
        {
            global $db;

            $query = "
                select * from
                      (SELECT * from (
                        (select * from trips_locations WHERE
                          (trips_locations.originS = (SELECT locations.settelmentID FROM locations WHERE locations.settelment LIKE '$origin')) OR
                          (trips_locations.stopsS = (SELECT locations.settelmentID FROM locations WHERE locations.settelment LIKE '$origin'))OR
                          (trips_locations.stop2S = (SELECT locations.settelmentID FROM locations WHERE locations.settelment LIKE '$origin'))OR
                          (trips_locations.stop3S = (SELECT locations.settelmentID FROM locations WHERE locations.settelment LIKE '$origin'))OR
                          (trips_locations.originC = (SELECT locations.councilID FROM locations WHERE locations.settelment LIKE '$origin')) OR
                          (trips_locations.stopsC = (SELECT locations.councilID FROM locations WHERE locations.settelment LIKE '$origin'))OR
                          (trips_locations.stop2C = (SELECT locations.councilID FROM locations WHERE locations.settelment LIKE '$origin'))OR
                          (trips_locations.stop3C = (SELECT locations.councilID FROM locations WHERE locations.settelment LIKE '$origin'))OR
                          (trips_locations.originT = (SELECT locations.townID FROM locations WHERE locations.settelment LIKE '$origin')) OR
                          (trips_locations.stopsT = (SELECT locations.townID FROM locations WHERE locations.settelment LIKE '$origin'))OR
                          (trips_locations.stop2T = (SELECT locations.townID FROM locations WHERE locations.settelment LIKE '$origin'))OR
                          (trips_locations.stop3T = (SELECT locations.townID FROM locations WHERE locations.settelment LIKE '$origin'))OR
                          (trips_locations.originR = (SELECT locations.regionID FROM locations WHERE locations.settelment LIKE '$origin')) OR
                          (trips_locations.stopsR = (SELECT locations.regionID FROM locations WHERE locations.settelment LIKE '$origin'))OR
                          (trips_locations.stop2R = (SELECT locations.regionID FROM locations WHERE locations.settelment LIKE '$origin'))OR
                          (trips_locations.stop3R = (SELECT locations.regionID FROM locations WHERE locations.settelment LIKE '$origin'))) as T)
                      WHERE t.destinationS = (SELECT locations.settelmentID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.stopsS = (SELECT locations.settelmentID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.stop2S = (SELECT locations.settelmentID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.stop3S = (SELECT locations.settelmentID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.destinationC = (SELECT locations.councilID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.stopsC = (SELECT locations.councilID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.stop2C = (SELECT locations.councilID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.stop3C = (SELECT locations.councilID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.destinationT = (SELECT locations.townID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.stopsT = (SELECT locations.townID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.stop2T = (SELECT locations.townID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.stop3T = (SELECT locations.townID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.destinationR = (SELECT locations.regionID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.stopsR = (SELECT locations.regionID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.stop2R = (SELECT locations.regionID FROM locations WHERE locations.settelment LIKE '$destination') OR
                            t.stop3R = (SELECT locations.regionID FROM locations WHERE locations.settelment LIKE '$destination'))as trips;
            ";
            $result = $db->connaction->query($query);
            while ($obj = $result->fetch_object()) {
                $trips[] = $obj;
            }
            return $trips;
        }

    }

}
require_once 'class-db.php';

$query = new QUERY;





