<?php

/*when delete link is clicked this page gets the id of the video to be deleated
	It deletes videos from videotable in mySQl database and deletes videos in the uUploads folder.
*/
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

