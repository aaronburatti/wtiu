<?php

$db_host  = 'localhost';
$db_root  = 'root';
$db_pass  = '';
$db_data  = 'wtiu';
//passing these as variables makes them harder to crack
$connection = mysqli_connect($db_host, $db_root, $db_pass, $db_data);
