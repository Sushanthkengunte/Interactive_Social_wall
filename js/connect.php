<?php
/*This provides a connection to the database with the specified hostname, username, password and the database*/
$host = "localhost";
$username = "root";
$user_password = "Syracuse@13210";
$db_to_connect = "medaux";
$mysqli = new mysqli($host, $username, $user_password, $db_to_connect);
if ($mysqli->connect_errno) {
   echo "error connecting db";
}


?>
