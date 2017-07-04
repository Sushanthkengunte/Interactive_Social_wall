<!DOCTYPE html>
<html>
  <head>
    <title>Ajax interpreter</title>
  <head>
  <body>
    <form>
	Name: <input type = "text" id = "name">
	<input type = "submit" id = "name-submit" value = "grab">
	<div class ="name_data"></div>
	<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type = "text/javascript" src = "js/global.js"></script>
	</form>





	<div id = "Content">
		<form method="post"	action = "index.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value = "10000000" id = "display">
		<div>
			<input type="file" name="image" id = "imageSelected" onchange = "loadimage(event)">

		</div>
		<img id = "img_otpt">
			<div>
				<textarea name = "text" rows = "4" placeholder="Say something"></textarea>

			</div>
			<div><input type="submit" name="upload" value = "upload" id = "upl_Clckd"></div>


		</form>

	</div>
	
  <body>
</html>