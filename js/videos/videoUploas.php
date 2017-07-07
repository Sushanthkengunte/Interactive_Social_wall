<!DOCTYPE html>
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