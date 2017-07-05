<?php

$host = "localhost";
$username = "root";
$user_password = "Syracuse@13210";
$db_to_connect = "medaux";
$mysqli = new mysqli($host, $username, $user_password, $db_to_connect);
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



?>
