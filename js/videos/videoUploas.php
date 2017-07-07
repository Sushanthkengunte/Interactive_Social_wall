<!DOCTYPE html>
<!--This page provides an interface to take a video file as input and a description for the video.
	It requires uplaodingToDirectory.php in the same path as it jumps to that file when click upload.
	and provides a home button to go back to the home page which is at a relative path "../index.php". 
-->
	<html>
	<head>
		<meta charset="utf-8">
		<title>uploading files</title>
	</head>
	<body>
	<form method="POST" action="uplaodingToDirectory.php" enctype="multipart/form-data">
	Description of Video: <input type="text" name="description_entered" id = "description_entered" required="true" /><br><br>
	<input type="file" name="file" id="file" required="true" /><br><br>
		
	<input type="submit" name="submit" id = "submit" value="Upload"/>

	</form>

	<br>
	<form 	action = "../index.php"><input type="submit" value = "Back to home"></div></form>
	</body>
	</html>