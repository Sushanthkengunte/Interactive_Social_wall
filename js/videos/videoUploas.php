<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>uploading files</title>
	</head>
	<body>
	<form method="POST" action="uplaodingToDirectory.php" enctype="multipart/form-data">
	Description of Video: <input type="text" name="description_entered"/><br><br>
	<input type="file" name="file" id="file" /><br><br>
		
	<input type="submit" name="submit" value="Upload"/>

	</form>
	</body>
	</html>