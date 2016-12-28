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
		<title>Gallery</title>
		<link rel="stylesheet" type="text/css" href="gallerycss.css">

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


		<div id="gly" style="background-color:orange ; margin-top:-30px">
			<table id="gly1" style="margin-left:150px ; margin-top:30px ; margin-bottom:10px">
				<tr>
					<td><img class="gls" src="Gallery_pics\3dg1.jpg" style="width:200px ;height:200px"></td>
					<td><img class="gls" src="Gallery_pics\3dg2.jpg" style="width:200px ;height:200px"></td>
					<td><img class="gls" src="Gallery_pics\3dg3.jpg" style="width:200px ;height:200px"></td>
				</tr>
				
				<tr>
					<td><img class="gls" src="Gallery_pics\3dg4.jpg" style="width:200px ;height:200px"></td>
					<td><img class="gls" src="Gallery_pics\3dg5.jpg" style="width:200px ;height:200px"></td>
					<td><img class="gls" src="Gallery_pics\3dg6.jpg" style="width:200px ;height:200px"></td>
				</tr>
					
				<tr>	
					<td><img class="gls" src="Gallery_pics\3dg7.jpg" style="width:200px ;height:200px"></td>
					<td><img class="gls" src="Gallery_pics\3dg8.jpg" style="width:200px ;height:200px"></td>
					<td><img class="gls" src="Gallery_pics\3dg9.png" style="width:200px ;height:200px"></td>
				</tr>
				
			</table>
.	
	
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