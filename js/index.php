<!-- This is the Home page of the website. It requires displayAllImage.php and displayAllVideos.php to be in the same same path.
      It creates a webpage with two tab images and videos who's content are provided by displayAllImage.php and displayAllVideos.php.
      Images tab is opened by default.
  -->

<!DOCTYPE html>
<html>
  <head>
    <title>Home page</title>
    <link rel = "stylesheet" type = "text/css" href = "myStyle.css" />
  <head>
  <body>
<!-- logo is displayed in the center-->
  <table align="center"> 
    <tr>
        <td class="height" style="text-align: center; vertical-align: middle;" >
              <img src="home_page_image.png" alt="Smiley face" width="500" height="150">
        </td>
    </tr>
</table>

  <!-- implementing tab buttons with on click functionality-->
  	<div class="tab">
  	<button class="tablinks" onclick="openMedia(event, 'images')" id="defaultOpen">Images</button>
  	<button class="tablinks" onclick="openMedia(event, 'videos')" id="videoTab">Videos</button>
  
	</div>

<div id="images" class="tabcontent">
<!-- Provides the content for image tab-->
 <?php
		include 'displayAllImage.php';
?>
</div>
<!-- Provides the content for videos tag-->
<div id="videos" class="tabcontent">
  <?php
		include 'displayAllVideos.php';
?>
</div>

    
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
<!---->
document.getElementById("defaultOpen").click();
</script>	
	
	
			


		
	
  <body>
</html>