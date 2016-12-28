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
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="shopcss.css">
		<link rel="stylesheet" type="text/css" href="style.css">
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



<div class="header"> 
	<h1>Login</h1>

	<input type="button" onclick="location.href='register.php';" value="Register" />
</div>
	<form action="" method="POST">
		<table>
			<tr>
	
				<td>Username:</td> 
				<td><input type="text" name="user" class="textInput"></td>
			</tr>
	
			<tr>
				<td>Password:</td> 
				<td><input type="password" name="pass" class="textInput"></td>	
			</tr>

			<tr>

				<td></td>
				<td><input type="submit" value="Login" name="submit" /></td>
		
			</tr>
		</table>

	</form>

<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('d3') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location: 3d1.php");
	}
	} else {
	echo "INVALID USERNAME or PASSWORD!";
	}

} else {
	echo "All fields are required!";
}
}
?>



		
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