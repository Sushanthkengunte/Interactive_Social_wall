<!DOCTYPE html>
<html>
  <head>
    <title>Ajax interpreter</title>
  <head>
  <body>
    <div id = "Content">
		<form method="post"	action = "addImage.php" enctype="multipart/form-data">
		<!--<input type="hidden" name="size" value = "10000000" id = "display">-->
		<div>
			<input type="file" name="image" id = "imageSelected">

		</div>
		<img id = "img_otpt">
			<!--<div>
				<textarea name = "text" rows = "4" placeholder="Say something"></textarea>
				add back button to home page
			</div>-->
			<div><input type="submit" name="upload" value = "upload"></div>


		</form>

	</div>
	<?php

	if(isset($_POST['upload'])){
 	//connect to the database

	$host = "localhost";
	$username = "root";
	$user_password = "Syracuse@13210";
	$db_to_connect = "medaux";

	$mysqli = new mysqli($host, $username, $user_password, $db_to_connect);
	if (!$mysqli->connect_errno) {
   echo $mysqli->host_info . "\n";
	}

 	$file = $_FILES['image']['tmp_name'];

 	if(!isset($file))
 	echo "Please select an image";
 	else{

 		$imageSaved = addslashes(file_get_contents($_FILES['image']['tmp_name']));
 		$image_name =  addslashes($_FILES['image']['name']);
 		$image_size = getimagesize($_FILES['image']['tmp_name']);



 		if($image_size == FALSE)
 		echo "Thats not a image";
 		else{
 			$sql = "INSERT INTO imagetable VALUES (NULL, '$image_name','$imageSaved')";
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
	
  <body>
</html>