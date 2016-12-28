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



<!DOCTYPE HTML>
<html>

	<head>
		<title>Shop</title>
		<link rel="stylesheet" type="text/css" href="shopcss.css">
	</head>


	<body>
		
	
		<ul id="cj">

				<li id="cp"><h1 style="font-family:Garamond ;font-weight:bold">GALACTUS</h1></li>
			
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
			
			<div id="ppic">
				<img src="shop_pic\shop3dpic.jpg">
				<div style="margin-left:580px;margin-top:30px;">
					<p id="pp1" style="display:none;margin-left:-250px;color:red;font-size:30px">You have Successfully purchased the 3D Printer!</p>
					<button style="width:60px;height:30px" type="button" onclick="document.getElementById('pp1').style.display='block'">Buy</button>
				</div>
				
			</div>

		<div id="footer" style="padding-top:15px">
			<table id="footer1">
				<tr>
					<td id="footer2" style="width:250px">© 2016 Galactus, Inc.</td>
					<td class="footer3" style="width:200px"><a href="http://www.shapeways.com/legal/privacy-statement" style="text-decoration:none"><span style="color:white">Privacy & Terms</span></a></td>
					<td class="footer3" style="width:700px"><a href="http://www.shapeways.com/legal/content_policy" style="text-decoration:none"><span style="color:white">Content & Copyright</span></a></td>
					<td class="footer4"><a href="https://www.facebook.com/shapeways"><img src="Shared_pics\facebook.ico"></a></td>
					<td class="footer4"><a href="https://twitter.com/shapeways/"><img src="Shared_pics\twitter.png"></a></td>
					<td class="footer4"><a href="https://www.youtube.com/user/Shapeways"><img src="Shared_pics\youtube.ico"></a></td>
				</tr>
			</table>
		</div>




	

	</body>

</html>