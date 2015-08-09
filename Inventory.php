<?php
require_once('include/class-query.php');
session_start();
if ($_SESSION) {

    if (!empty($_SESSION['username'])) {
        $time = time();
        $user_time = $_SESSION['time'];
        $away_time = $time - $user_time;
        if ($away_time > 900) {
            header('Location: http://localhost/login.php');
        } else {
            $_SESSION['time'] = time();
        }
    } else {
        header('Location: http://localhost/login.php');
    }
} else {
    header('Location: http://localhost/login.php');
}
?>
<?php include 'header.php'; ?>
<body>
<?php include 'nav.php' ?>
<!-- Main jumbotron for a primary m arketing message or call to action -->
<div class="pull-right"><a href="#" onclick="killHeader()" class="glyphicon glyphicon-minus-sign exit"
                           style="padding: 15px; text-decoration: none;"></a></div>
<div class="jumbotron">

    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['username'] ?>!</h1>

        <p>Welcome to turbines inventory system.</p>

        <p><a class="btn btn-primary" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>
<br>

<div class="container">
    <div class="row well">
        <form method="POST" action="email_validation.php">
            <div class="form-inline">
                <div class="form-group">
                    <label class="sr-only" for="Item">Item</label>
                    <select class="selectpicker form-control input-sm" name="Item">
                        <?php
                        $items = $query->get_items();
                        foreach ($items as $item) {
                            echo '<option>' . $item->itemName . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="FromWarehouse">FromWarehouse</label>
                    <select class="selectpicker form-control input-sm" name="FromWarehouse">
                        <?php
                        $warehouses = $query->get_warehouses();
                        foreach ($warehouses as $warehouse) {
                            echo '<option>' . $warehouse->WarehouseName . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="ToWarehouse">ToWarehouse</label>
                    <select class="selectpicker form-control input-sm" name="ToWarehouse">
                        <?php
                        $warehouses = $query->get_warehouses();
                        foreach ($warehouses as $warehouse) {
                            echo '<option>' . $warehouse->WarehouseName . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="PlaceInLane">PlaceInLane</label>
                    <select class="selectpicker form-control input-sm" name="PlaceInLane">
                        <?php
                        $pils = $query->get_placeInLane();
                        foreach ($pils as $pil) {
                            echo '<option>' . $pil->placeinlane . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="partState">partState</label>
                    <select class="selectpicker form-control input-sm" name="partState">
                        <option>Broken</option>
                        <option>New</option>
                        <option>Used</option>
                    </select>
                </div>


                <div class="form-group">
                    <label class="sr-only" for="Date">Date</label>
                    <input type="datetime" class="form-control input-sm" id="Date" placeholder="Date" name="Date"
                           value="<?php echo date('d/m/Y h:m:s') ?>">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="Name">Name</label>
                    <input type="text" class="form-control input-sm" id="Name" placeholder="Name" name="Name"
                           value="<?php echo $_SESSION['username'] ?>">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="Quantity">Quantity</label>
                    <input type="number" class="form-control input-sm" id="Quantity" placeholder="Quantity"
                           name="Quantity">
                </div>


                <div class="form-group">
                    <label class="sr-only" for="Remarks">Remarks</label>
                    <input type="text" class="form-control input-sm" id="Remarks" placeholder="Remarks" name="Remarks">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="WorkOrder">WorkOrder</label>
                    <input type="number" class="form-control input-sm" id="WorkOrder" placeholder="Work Order"
                           name="WorkOrder">
                </div>

                <button type="submit" class="btn-sm btn btn-primary" name="submit">Update</button>
            </div>
        </form>
    </div>
    <div class="row">

        <!--        place for inventory table -->
        <table id="alltable" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Item</th>
                <th>PIL</th>
                <th>Amount</th>
                <th>Warehouse</th>
            </tr>
            </thead>
            <?php $fullInventory = $query->get_fullInventory() ?>
            <tbody>
            <?php
            foreach ($fullInventory as $i) {
                echo '<tr>';
                echo '<td>' . $i->itemName . '</td>';
                echo '<td>' . $i->placeinlane . '</td>';
                echo '<td>' . $i->amountInStock . '</td>';
                echo '<td>' . $i->WarehouseName . '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>

    </div>

    <hr>
    <?php include 'footer.php'; ?>
