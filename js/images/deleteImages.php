<?php
 /*when delete link is clicked this page gets the id of the image to be deleated
	It deletes videos from imagetable in mySQl database.
*/
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
