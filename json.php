<?php

include 'include/class-query.php';
$loc = $query->locations();
print_r(json_encode($loc,JSON_UNESCAPED_UNICODE));