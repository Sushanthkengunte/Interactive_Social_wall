<?php

$host = "localhost";
$username = "root";
$user_password = "Syracuse@13210";
$db_to_connect = "testdb";
$mysqli = new mysqli($host, $username, $user_password, $db_to_connect);
if (!$mysqli->connect_errno) {
   echo $mysqli->host_info . "\n";
}



?>
