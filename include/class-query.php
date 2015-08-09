<?php
if (!class_exists('query')) {
    class QUERY
    {
        public function get_email($email)
        {
            global $db;

            $query = "
            SELECT * FROM Ultron_db.users WHERE email = '$email'
            ";
            $result = $db->connaction->query($query);
            while ($obj = $result->fetch_object()) {
                $results[] = $obj;
            }
            return $results;
        }

        public function login($username, $password)
        {
            global $db;

            $query = "
                SELECT * FROM Ultron_DB.users WHERE name = '$username'
            ";
            $result = $db->connaction->query($query);
            while ($obj = $result->fetch_object()) {
                $results[] = $obj;
            }
            if ($results) {
                $obj_pass = $results[0]->password;
                if (password_verify($password, $obj_pass)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        public function get_nav()
        {
            global $db;

            $query = "
            SELECT * FROM Ultron_DB.nav_bar
        ";
            $result = $db->connaction->query($query);
            while ($obj = $result->fetch_object()) {
                $results[] = $obj;
            }
            return $results;
        }

        public function get_fullInventory()
        {
            global $db;

            $query = "SELECT Stock_item.itemName,stock_placeInLane.placeinlane,amountInStock,stock_warehouse.WarehouseName
                       FROM stock_inventory
                       INNER JOIN Stock_item on Stock_item.ItemId = stock_inventory.itemID
                       LEFT JOIN stock_placeInLane on stock_placeInLane.placeinlaneID = stock_inventory.PlaceInLane
                       INNER JOIN stock_warehouse on stock_warehouse.WarehouseId =stock_inventory.WareHouseID";
            $result = $db->connaction->query($query);
            while ($obj = $result->fetch_object()) {
                $results[] = $obj;
            }
            return $results;
        }

        public function get_items()
        {
            global $db;

            $query = "SELECT itemName FROM Stock_item ";

            $result = $db->connaction->query($query);
            while ($obj = $result->fetch_object()) {
                $results[] = $obj;
            }
            return $results;
        }

        public function get_warehouses()
        {
            global $db;

            $query = "SELECT WarehouseName FROM stock_warehouse ";

            $result = $db->connaction->query($query);
            while ($obj = $result->fetch_object()) {
                $results[] = $obj;
            }
            return $results;
        }

        public function get_placeInLane()
        {
            global $db;

            $query = "SELECT stock_placeInLane.placeinlane FROM stock_placeInLane";

            $result = $db->connaction->query($query);
            while ($obj = $result->fetch_object()) {
                $results[] = $obj;
            }
            return $results;
        }
    }

}
require_once 'class-db.php';

$query = new QUERY;





