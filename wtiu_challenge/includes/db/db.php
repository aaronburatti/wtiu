<?php

$db_host  = '';
$db_root  = '';
$db_pass  = '';
$db_data  = '';
//passing these as variables makes them harder to crack
$connection = mysqli_connect($db_host, $db_root, $db_pass, $db_data);
