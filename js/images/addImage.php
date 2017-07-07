<!DOCTYPE html>
<!--This page provides an interface to take a image file as input.
	It requires insertingIntoDB.php in the same path as it jumps to that file when click upload.
	and provides a home button to go back to the home page which is at a relative path "../index.php". 
-->
<html>
  <head>
    <title>Add Images</title>
  <head>
  <body>
    <div id = "Content">
		<form method="post"	action = "insertingIntoDB.php" enctype="multipart/form-data">
		<div>
			<input type="file" name="image" id = "imageSelected" required="true">

		</div>
		<img id = "img_otpt">
			
			<div><input type="submit" name="upload" value = "upload"></div>

			
		</form>
		<br>
		<form 	action = "../index.php"><input type="submit" value = "Back to home"></div></form>

	</div>	
  <body>
</html>