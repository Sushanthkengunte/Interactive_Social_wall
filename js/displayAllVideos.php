<?php
	 include 'connect.php';
      if($_GET['Likeidvideo']){
          $id_of = $_GET['Likeidvideo'];
          $sql = "UPDATE videotable set likes_of = likes_of+1 where id = $id_of";
          $image = $mysqli->query($sql) or die($mysqli->error);
        }

  $sql = "SELECT * FROM videotable ORDER BY ID DESC";
  $image = $mysqli->query($sql) or die($mysqli->error);
  echo "<form action=\"videos/videoUploas.php\"><input type=\"submit\" value=\"Add Videos\"/></form>";
  while ($row = mysqli_fetch_row($image)) {
  echo " <table style=\"border:1px solid black;\" align=\"center\" cellspacing=\"5\">
        <tr>
        <td height=\"250\" width=\"250\" colspan=\"3\">";
     if($row[3] == "gif"){
      echo "<img src=\"$row[4]\" alt=\"$row[2]\" style=\"width:250px;height:250px;\" id = \"$row[2]\">";
     }else{
    echo "<video width=\"250\" height=\"250\" controls>
  <source src= \"$row[4]\" type=\"video/$row[3]\"  id = \"$row[0]\">
  
Your browser does not support the video tag.
</video>";
}
$correctValue = $row[0].','.$row[2];
    echo "</td></tr><tr><td>$row[1]</td><td><a href=\"index.php?Likeidvideo=$row[0]\">Like $row[5]</a></td><td><a href=\"videos/deleteVideos.php?id=$correctValue\">Delete</a></td></table> ";
          
           }
/* <form method=\"post\" action=\"videos/deleteVideos.php\"><button type = \"submit\" id=\"$row[0]\" name = \"deleteImage\" value = \"$row[0],$row[2]\">Delete</button>*/

			?>