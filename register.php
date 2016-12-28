<!Doctype>
<html>

	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>



	<body>
	
<div class="header">
<h1>Login</h1>

	<input type="button" onclick="location.href='login.php';" value="Login" />
</div>
	
<form method="post" action="">
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
				<td><input type="submit" value="Create Account" name="submit" /></td>
		
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

	$query=mysql_query("SELECT * FROM login WHERE username='".$user."'");
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO login(username,password) VALUES('$user','$pass')";

	$result=mysql_query($sql);


	if($result){
	echo "Account Successfully Created";
	} else {
	echo "Failure!";
	}

	} else {
	echo "That USERNAME already EXISTS! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>



	</body>

</html>