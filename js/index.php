<!DOCTYPE html>
<html>
  <head>
    <title>Home page</title>
    <link rel = "stylesheet" type = "text/css" href = "myStyle.css" />
  <head>
  <body>

  
  	<div class="tab">
  	<button class="tablinks" onclick="openMedia(event, 'images')" id="defaultOpen">Images</button>
  	<button class="tablinks" onclick="openMedia(event, 'videos')" id="videoTab">Videos</button>
  
	</div>

<div id="images" class="tabcontent">
 <?php
		include 'displayAllImage.php';
?>
</div>

<div id="videos" class="tabcontent">
  <?php
		include 'displayAllVideos.php';
?>
</div>

<!--
<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>-->
    
<script>
function openMedia(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>	
	
	
			


		
	
  <body>
</html>