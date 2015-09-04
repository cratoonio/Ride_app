<?php require "header.php" ?>
<?php include_once "include/class-insert.php" ?>
<pre>
    <?php
    print_r($_POST);
    $insert->give($_POST['origin'], $_POST['price'], $_POST['stops'], $_POST['stop2'], $_POST['stop3'], $_POST['destination'], $_POST['date'], $_POST['name'],
        $_POST['phone'], $_POST['remarks'], $_POST['petFriendly'], $_POST['noAC'], $_POST['smoker'], $_POST['Periodic']
        , $_POST['san'], $_POST['mon'], $_POST['tue'], $_POST['wed'], $_POST['thu'], $_POST['fri'], $_POST['sat'], $_POST['time'],$_POST['pass']);
    ?>
</pre>
<?php require "footer.php" ?>
