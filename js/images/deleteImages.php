<?php
 
	$id = $_GET['id'];
	include '../connect.php';

	$sql = "DELETE FROM imagetable WHERE id=$id";
	if($mysqli->query($sql))
		echo "Record Successfully deleted";
	else
		echo "Error deleting record: " . $mysqli->error;

$mysqli->close();
echo "<form action=\"../index.php\"><input type= \"submit\" value=\"Back to home\" /></form>";


?>
