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



<!Doctype HTML>
<html>
	<head>
		
		<link rel="stylesheet" type="text/css" href="abtcss.css">
		<title>About page</title>
		
	</head>

	<body>

		<ul id="cj">

			<li id="cp"><h1 style="font-family:Garamond ;font-weight:bold">GALACTUS</h1></li>
			
		</ul>			
		
		<ul>
			<li><a href="3d1.php">Home</a></li>
			<li><a href="gallery1.php">Gallery</a></li>
			<li><a href="about1.php">About Us</a></li>
			<li style="margin-left:240px ; margin-top:8px">
				<audio autoplay loop>
					<source src="Jonas Blue - Perfect Strangers ft. JP Cooper.mp3" type="audio/mpeg">
				</audio>
			</li>
			
  			<li id="aj" style="float:right"><a href="logout.php">Logout</a></li>
			<li id="abc" style="float:right"><a href="shop1.php"><img src="nav_pics\3dshop.jpg"></a></li>


		</ul>


		<p id="m"><bold>About Us</bold></p>
		
<div id="abt">	
<p id="abt1">Founded in 2016, Galactus is led by folks who've spent most of their careers in startups, and combine serious technical chops with an inspiring vision of what the world could be. We’re bringing together a passionate, dynamic team of game changers. We're having a great time working and playing harder than we ever have in our lives. It doesn’t hurt to know that what we do is changing the future as we know it.</p>

<p id="abt2">Headquartered in India, Galactus has factories and offices in Peddar Road, Byculla, and Bandra. Galactus is a spin-out of the lifestyle incubator of Royal Philips Electronics, and our investors include <span style="color:#87CEEB">Union Square Ventures</span>, <span style="color:#87CEEB">Index Ventures</span>, <span style="color:#87CEEB">Lux Capital</span>, <span style="color:#87CEEB">Andreessen Horowitz</span>, <span style="color:#87CEEB">INKEF Capital</span>, <span style="color:#87CEEB">Hewlett Packard Ventures</span>, and <span style="color:#87CEEB">Presidio Ventures</span>.</p>

<p id="abt3">Since its inception, Galactus has been defining the industry. <span style="color:#87CEEB">Join our passionate team</span> and help create the future of 3D printing today!</p>
</div>
	
	<div id="imag">
		
			<img class="img-circle" src="Founder_pics\jay.jpg">
			<img class="img-circle" src="Founder_pics\3dpic.jpg">
			<img class="img-circle" src="Founder_pics\3dpic2.jpg">
	
	</div>
	<table style="margin-left:315px;text-align:center; font-size:15px; font-family:Verdana;font-weight:bold">
		<tr>
			<td>Jay Shah</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laveena Punjabi</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hasan Samplewala</td>
		</tr>
	</table>


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