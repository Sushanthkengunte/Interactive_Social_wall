
<?php
//echo "Content";
//require '../db/connect.php';
//echo "$_POST["name"]";
if(isset($_POST['name'])=== true && empty($_POST['name']) === false){
	
$host = "localhost";
$username = "root";
$user_password = "Syracuse@13210";
$db_to_connect = "testdb";
$mysqliex = new mysqli($host, $username, $user_password, $db_to_connect);
if ($mysqliex->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
	//$temp = ".$mysqli->real_escape_string(trim($_POST['name'])).";
	$temp = trim($_POST['name']);
	//echo  "SELECT location FROM mytable WHERE mytable.name = \"$temp\"";
	 $query = "SELECT location FROM mytable WHERE mytable.name = \"$temp\""; /*mytable.name = $temp*/
	$result = $mysqliex->query($query);
	 
	if ($result->num_rows > 0)
		{
		// "Name found" 
			$row = mysqli_fetch_row($result);
			echo $row[0];
		}

		else{
		echo "Name not found";
		}
}
//".$mysqli->real_escape_string(trim($_POST['name']))."
		/*echo '<img src=\"data:image/jpeg;base64,<?php echo base64_encode( $image_name ); ?>\" />';*/
?>


