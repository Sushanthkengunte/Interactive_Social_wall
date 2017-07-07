				<?php
				/*It provides the contents for image tag by querying the MySql database. It requires connect.php to be in the same path
				It captures the like id number when an image is liked and updates the database.
				It retrieves all images present in the database table "imagetable" puts it in a html table.
				It jumps to addImages.php that is at a relative path "images/addImges.php" when clicked add images
				versiom_1.0: displays all images from folder.
				 */

		include 'connect.php';
				error_reporting(E_ERROR | E_PARSE);
			if($_GET['Likeid']){
					$id_of = $_GET['Likeid'];
					//updates the like of a image using its id
					$sql = "UPDATE imaagestable set likes_of = likes_of+1 where id = $id_of";
					$image = $mysqli->query($sql) or die($mysqli->error);
				}


				//Retrieves all the images in the mySQl database.
				$sql = "SELECT * FROM imaagestable ORDER BY ID DESC";
				$image = $mysqli->query($sql) or die($mysqli->error);
				echo "<form action=\"images/addImage.php\"><input type=\"submit\" value=\"Add images\" /></form>";
				//Putting the data in a table
				 while ($row = mysqli_fetch_row($image)) {

				echo " <table style=\"border:1px solid black;\" align=\"center\" cellspacing=\"5\">
  					<tr>
   				 		<td height=\"250\" width=\"260\" colspan=\"3\">";

   				 		$correctValue = $row[0].','.$row[1];
   				echo '<img src="'.$row[2].'" height="250" width="260" id = "' . $row[0] ."\" />" ;
   				echo "</td></tr><tr><td>$row[1]</td><td><a href=\"index.php?Likeid=$row[0]\">Like $row[3]</a></td><td><a href=\"images/deleteImages.php?id=$correctValue\">Delete</a></td></table> ";  				
   				 }

   			
			?>


			
			