<?php

	if(isset($_POST['upload'])){
 	//connect to the database
	include '../connect.php';
 	$file = $_FILES['image']['tmp_name'];

 	if(!isset($file))
 	echo "Please select an image";
 	else{

 		$imageSaved = addslashes(file_get_contents($_FILES['image']['tmp_name']));
 		$image_name =  addslashes($_FILES['image']['name']);
 		$image_size = getimagesize($_FILES['image']['tmp_name']);


 		echo "<form action=\"../index.php\"><input type= \"submit\" value=\"Back to home\" /></form>";
 		if($image_size == FALSE)
 		echo "Thats not a image";
 		else{
 			$sql = "INSERT INTO imagetable VALUES (NULL, '$image_name','$imageSaved',0)";
 			if(! $mysqli->query($sql))
 			echo "Problem uploading image";
 			else{
 			$lastid = $mysqli->insert_id;
 			echo " <p>Upload Successfull.
 				Your Image.
 			</p><img src=get.php?id=$lastid>";
 	

 			}

 		}


 	}

  
}
?>