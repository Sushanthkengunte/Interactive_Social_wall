<?php

	$id = $_GET['id'];
	$fileNameArray = explode(',', $id);
	$correctID = $fileNameArray[0];
	$fileNameIs = end($fileNameArray);
	include '../connect.php';

	 $dir = "Uploads".'/'.$fileNameIs;
     unlink($dir);
    
  	
	 $sql = "DELETE FROM videotable WHERE id=$correctID";
	if($mysqli->query($sql))
		echo "Record Successfully deleted";
	else
		echo "Error deleting record: " . $mysqli->error;

		$mysqli->close();
	
	echo "<form action=\"../index.php\"><input type= \"submit\" value=\"Back to home\" /></form>";

?>

