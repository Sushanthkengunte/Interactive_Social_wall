<?php
 /*when delete link is clicked this page gets the id of the image to be deleated
	It deletes videos from imagetable in mySQl database.
	versiom_1.0: deleted from folder and the database
*/
	$id = $_GET['id'];
	$fileNameArray = explode(',', $id);
	$correctID = $fileNameArray[0];
	$fileNameIs = end($fileNameArray);
	include '../connect.php';
	 $dir = "Uploads".'/'.$fileNameIs;
     unlink($dir);
	$sql = "DELETE FROM imaagestable WHERE id=$correctID";
	if($mysqli->query($sql))
		echo "Record Successfully deleted";
	else
		echo "Error deleting record: " . $mysqli->error;

$mysqli->close();
echo "<form action=\"../index.php\"><input type= \"submit\" value=\"Back to home\" /></form>";


?>
