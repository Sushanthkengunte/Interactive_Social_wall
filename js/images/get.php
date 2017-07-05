<?php

	$host = "localhost";
	$username = "root";
	$user_password = "Syracuse@13210";
	$db_to_connect = "medaux";
	
	$mysqli = new mysqli($host, $username, $user_password, $db_to_connect);
	if (!$mysqli->connect_errno) {
   //echo $mysqli->host_info . "\n";
	}
	/*$link = mysqli_connect($host, $username, $user_password, $db_to_connect);
	if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
	}*/
	$id = addslashes($_GET['id']);

	$sql = "SELECT * FROM imagetable WHERE id =\"$id\"";
	$image = $mysqli->query($sql) or die($mysqli->error);
	$image = mysqli_fetch_assoc($image);
	$image = $image["imagesOf"];
	echo $image;
	//echo '<img src="data:image/jpeg;base64,' . base64_encode( $image ) . '" />';

			/*echo '<img src=\"data:image/jpeg;base64,<?php echo base64_encode( $image_name ); ?>\" />';*/
				/*$sql = "SELECT * FROM images WHERE id = $lastid";
			$result = $mysqli->query($sql);
			//$image = $result->fetch_assoc();
			$image = $result->fetch_array(MYSQLI_BOTH);
			echo $image_name = $image['id'];*/






			/*else{
 			$sql ="INSERT INTO images VALUES (NULL,$image_name,$imageSaved)";
 			if(!$insert = mysqli_query($link, $sql))
 			echo "Problem uploading";
 			else{
 			$lastid = $mysqli->insert_id;
 			echo "Image uploaded. <p>Your Image</p><img src=get.php?id=$lastid>";
 			}

 			}
*/


?>