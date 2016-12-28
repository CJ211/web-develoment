<?php
	if(isset($_GET['page']))
	{
		$page = $_GET['page'];
	}
	
	else
	{
		$page = "";
	}
	
	include 'case.php';
?>

<!DOCTYPE>
<html>

	<head>
		<title>3D printing</title>
		<link rel="stylesheet" type="text/css" href="css3d.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

 
	</head>

	<body>
		
	
		<ul id="cj">

				<li id="cp"><h1 style="font-family:Garamond ;font-weight:bold ">GALACTUS</h1></li>
			
		</ul>	

		<ul>
			<li><a href="3d.php">Home</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="about.php">About Us</a></li>
			<li style="margin-left:240px ; margin-top:8px">
				<audio autoplay loop>
					<source src="The Chainsmokers - Closer (Lyric) ft. Halsey.mp3" type="audio/mpeg">
				</audio>
			</li>
			<li id="aj" style="float:right"><a href="login.php">Sign in</a></li>
			<li id="abc" style="float:right"><a href="shop.php"><img src="nav_pics\3dshop.jpg"></a></li>
		</ul>
		
		


				
		<div class="w3-content w3-section" style="max-width:100%">
  
			<img class="xyz w3-animate-fading" src="animation_pics\3dpic.jpg" style="width:100% ; height:500px ; margin-top:-10px; ">
			<img class="xyz w3-animate-fading" src="animation_pics\3dpic1.jpg" style="width:100% ; height:500px ;margin-top:-16px;">
		  	<img class="xyz w3-animate-fading" src="animation_pics\3dpic2.jpg" style="width:100% ; height:500px ; margin-top:-16px;">
		  	<img class="xyz w3-animate-fading" src="animation_pics\3dpic3.jpg" style="width:100% ; height:500px ; margin-top:-16px;">
		</div>
		
		<script>
			var myIndex = 0;
			carousel();

			function carousel() {
	    		
						var i;
    						var x = document.getElementsByClassName("xyz");
   						for (i = 0; i < x.length; i++) 
						{
       							x[i].style.display = "none";
    					    	}

					   	 myIndex++;
					   	 if (myIndex > x.length) {myIndex = 1}
    					   	 x[myIndex-1].style.display = "block";
    					   	 setTimeout(carousel, 9000);
					    }
		</script>

		<div id="f1">
				
			<img src="animation_pics/galactus.gif">	
			
		</div>
		
		<div id="footer" style="padding-top:20px">
			<table id="footer1">
				<tr>
					<td id="footer2" style="width:250px">© 2016 Galactus, Inc.</td>
					<td class="footer3" style="width:200px"><a href="http://www.shapeways.com/legal/privacy-statement" style="text-decoration:none">Privacy & Terms</a></td>
					<td class="footer3" style="width:700px"><a href="http://www.shapeways.com/legal/content_policy" style="text-decoration:none">Content & Copyright</a></td>
					<td class="footer4"><a href="https://www.facebook.com/shapeways"><img src="Shared_pics\facebook.ico"></a></td>
					<td class="footer4"><a href="https://twitter.com/shapeways/"><img src="Shared_pics\twitter.png"></a></td>
					<td class="footer4"><a href="https://www.youtube.com/user/Shapeways"><img src="Shared_pics\youtube.ico"></a></td>
				</tr>
			</table>
		</div>
					
		
					
	</body>
		

</html>