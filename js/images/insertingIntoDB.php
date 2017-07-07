<?php
	/*This inserts the selected image into "imagetable" in mySQL database
		It outputs the uploaded image using get.php present in the same path.
		It provides a home button to go back to the home page which is at a relative path "../index.php". 
		versiom_1.0: inserts into folder and into "imaagestable" in mySQL database

	*/
	if(isset($_POST['upload'])){
 	//connect to the database
	include '../connect.php';
	$target_dir = "Uploads/";
	 $target_file = $target_dir . basename($_FILES["image"]["name"]);
	 $fileextension = pathinfo($target_file,PATHINFO_EXTENSION);
	 $_FILES["image"]["error"];
	 $name= $_FILES['image']['name'];
 	 $file = $_FILES['image']['tmp_name'];
 	 echo "<form action=\"../index.php\"><input type= \"submit\" value=\"Back to home\" /></form>";
 	 if(!isset($file))
 	echo "Please select an image";
 	else{
 		$path= 'Uploads/';
 		$image_size = getimagesize($_FILES['image']['tmp_name']);
 			if($image_size == FALSE)
 		echo "Thats not a image";
 		else{
 			if (move_uploaded_file($file, $path.$name)) {
 		
 			$url = "http://localhost/MedAux_Assessment/js/images/Uploads/$name";
 			$sql = "INSERT INTO imaagestable VALUES (NULL, '$name','$url',0)";
 			if(! $mysqli->query($sql))
 						echo "Problem uploading image";
 					else{
 						echo 'Uploaded!';
 	
 						}
 					}
 			
 	

 			}

 		}
 		

 	

 	/*if (isset($name)) {
	$path= 'Uploads/';
	if (!empty($name)){
		if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm") && ($fileextension !== "gif"))
			{
				$success=0;
				echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
			}else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm") || ($fileextension == "gif"))
			{
				//$success=1;
				if (move_uploaded_file($file, $path.$name)) {
					
					 $url = "http://localhost/MedAux_Assessment/js/images/Uploads/$name";
					 echo 'Uploaded!';
					//$sql = "INSERT INTO videotable VALUES (NULL, '$description','$name','$fileextension','$url',0)";
 					//if(! $mysqli->query($sql))
 					//	echo "Problem uploading image";
 					//else{
 					//	echo 'Uploaded!';
 	
 					//	}
				}
			}
		}
}*/

 	/*if(!isset($file))
 	echo "Please select an image";
 	else{
 		$path= 'Uploads/';



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


 	}*/

  
}
?>