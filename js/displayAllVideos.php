<?php
/*It provides the contents for videos tag by querying the MySql database. It requires connect.php to be in the same path
        It captures the likeidvideo number when an videos is liked and updates the database.
        It retrieves all images present in the database table "videotable" puts it in a html table.
        It jumps to videoUploas.php that is at a relative path "videos/videoUploas.php" when clicked add videos
         */
error_reporting(E_ERROR | E_PARSE);
	 include 'connect.php';
      if($_GET['Likeidvideo']){
          $id_of = $_GET['Likeidvideo'];
          //updates the like of a image using its id
          $sql = "UPDATE videotable set likes_of = likes_of+1 where id = $id_of";
          $image = $mysqli->query($sql) or die($mysqli->error);
         // echo "<script> function myFunction() { document.getElementById(\"videoTab\").click(); } myFunction();</script>";
        }
//Retrieves all the images in the mySQl database.
  $sql = "SELECT * FROM videotable ORDER BY ID DESC";
  $image = $mysqli->query($sql) or die($mysqli->error);
  echo "<form action=\"videos/videoUploas.php\"><input type=\"submit\" value=\"Add Videos\"/></form>";
  //Retrieves all the images in the mySQl database.
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


			?>