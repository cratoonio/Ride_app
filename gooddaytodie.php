<?php
include "include/class-query.php";
 $result=$query->gooddaytodie();

?>
<pre>
<?php 
print_r($result->num_rows);
?>
</pre>