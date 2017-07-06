
<?php 
include '../connect.php';
 if(isset($_POST['submit'])){
$target_dir = "Uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
		
 $fileextension = pathinfo($target_file,PATHINFO_EXTENSION);
 $name= $_FILES['file']['name'];
 $tmp_name= $_FILES['file']['tmp_name'];

$description= $_POST['description_entered'];
echo "<form action=\"../index.php\"><input type= \"submit\" value=\"Back to home\" /></form>";
if (empty($description)){
	$descript= 1;
}
if (isset($name)) {



	if (!empty($name)){
		if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm") && ($fileextension !== "gif"))
			{
				$success=0;
				echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
			}else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm") || ($fileextension == "gif"))
			{
				$success=1;
					$fileContents = addslashes(file_get_contents($_FILES['file']['tmp_name']));
 					 $video_name =  addslashes($_FILES['file']['name']);
 					
					
					
					$sql = "INSERT INTO tableforvideos VALUES (NULL, '$description','$video_name','$fileContents','$fileextension')";

 					if(! $mysqli->query($sql)){
 						echo "Problem uploading image";
 											
 					}
 					else{

 						echo 'Uploaded!'; 	

 						}
				
			}
		}
}
}
?>
