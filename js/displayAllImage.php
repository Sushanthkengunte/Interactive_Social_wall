				<?php
		include 'connect.php';
				$sql = "SELECT * FROM imagetable";
				$image = $mysqli->query($sql) or die($mysqli->error);
				echo "<form action=\"images/addImage.php\"><input type=\"submit\" value=\"Add images\" /></form>";

				 while ($row = mysqli_fetch_row($image)) {

				echo " <table style=\"border:1px solid black;\" align=\"center\" cellspacing=\"5\">
  					<tr>
   				 		<td height=\"250\" width=\"250\" colspan=\"3\">";


   				echo '<img src="data:image/jpeg;base64,'.base64_encode($row[2] ).'"  height="250" width="250" id = "' . $row[0] ."\" />" ;
   				echo "</td></tr><tr><td>$row[1]</td><td>like</td><td><a href=\"images/deleteImages.php?id=$row[0]\">Delete</a></td></table> ";  				
   				 }
   				 /*<form method=\"post\" action=\"images/deleteImages.php\">
   				<button type = \"submit\" id=\"$row[0]\" name = \"deleteImage\" value = \"$row[0]\">Delete</button>

   				<a href=\"images/deleteImages.php?id=$row[0]\">Delete</a>
				<a href=\"videos/deleteVideos.php?id=$correctValue\">Delete</a>

   				*/
			?>


			
			