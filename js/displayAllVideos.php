<?php
	include 'connect.php';
	$sql = "SELECT * FROM tableforvideos ORDER BY ID DESC";
	$image = $mysqli->query($sql) or die($mysqli->error);

	echo "<form action=\"videos/videoUploas.php\"><input type=\"submit\" value=\"Add Videos\"/></form>";
	while ($row = mysqli_fetch_row($image)) {

	echo " <table style=\"border:1px solid black;\" align=\"center\" cellspacing=\"5\">
  			<tr>
   	 		<td height=\"250\" width=\"250\" colspan=\"3\">";
 $video = $row[3];
   	 if($row[4] == "gif"){
       echo '<img src="data:image/jpeg;base64,'.base64_encode($row[3] ).'"  height="250" width="250" id = "' . $row[0] ."\" />" ;
      
   	 }else{
         

  echo "<div content=\"Content-Type: video/".$row[4]."\"><video width=\"250\" height=\"250\" controls=\"controls\"><source type=\"video/".$row[4]."\" src=\"data:video/".$row[4].";base64,".base64_encode($video)."\"/></video></div>";


}
$correctValue = $row[0].','.$row[2];
   	echo "</td></tr><tr><td>$row[1]</td><td>like</td><td><a href=\"videos/deleteVideos.php?id=$correctValue\">Delete</a></td></table> ";
  				
   				 }
/* <form method=\"post\" action=\"videos/deleteVideos.php\"><button type = \"submit\" id=\"$row[0]\" name = \"deleteImage\" value = \"$row[0],$row[2]\">Delete</button>*/

			?>