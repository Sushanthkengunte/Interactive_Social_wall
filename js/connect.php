<?php

$host = "localhost";
$username = "root";
$user_password = "Syracuse@13210";
$db_to_connect = "medaux";
$mysqli = new mysqli($host, $username, $user_password, $db_to_connect);
if ($mysqli->connect_errno) {
   echo "error connecting db";
}

/*if($_GET['id']){
					$id = $_GET['id'];
					alert(1);
				}




<a href=\"displayAllImage.php?id=$row[0]\">Delete</a>
				*/




?>
