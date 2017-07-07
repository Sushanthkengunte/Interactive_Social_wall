
<?php 
include '../connect.php';
 if(isset($_POST['submit'])){
$target_dir = "Uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
		//$uploadOk = 1;
$fileextension = pathinfo($target_file,PATHINFO_EXTENSION);
$_FILES["file"]["error"];
$name= $_FILES['file']['name'];
 $tmp_name= $_FILES['file']['tmp_name'];
$submitbutton= $_POST['submit'];
$description= $_POST['description_entered'];

echo "<form action=\"../index.php\"><input type= \"submit\" value=\"Back to home\" /></form>";
if (empty($description)){
	$descript= 1;
}
if (isset($name)) {
	$path= 'Uploads/';
	if (!empty($name)){
		if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm") && ($fileextension !== "gif"))
			{
				$success=0;
				echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
			}else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm") || ($fileextension == "gif"))
			{
				$success=1;
				if (move_uploaded_file($tmp_name, $path.$name)) {
					
					 $url = "http://localhost/MedAux_Assessment/js/videos/Uploads/$name";
					$sql = "INSERT INTO videotable VALUES (NULL, '$description','$name','$fileextension','$url',0)";
 					if(! $mysqli->query($sql))
 						echo "Problem uploading image";
 					else{
 						echo 'Uploaded!';
 	
 						}
				}
			}
		}
}
}
?>
