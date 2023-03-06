<?php

$localhost = 'localhost';
$username = 'root';
$password = '';
$db_name = 'cdo-enorllment';

$conn = mysqli_connect($localhost, $username, $password);
mysqli_select_db($conn, $db_name) or die (error_reporting(E_ALL));


?>