<?php
	session_start();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<style >
		body {
			background-image: url("foodz.jpg");
			background-size: 100%;
		}
	</style>
</head>
<body >
	
<img src="logo.png">
		<h1> Delectable Tempting Meal Provider </h1>
<form method="post" action="mainpage.php">
	Enter Username: <input type="text" name="name" placeholder="Username"/><br>
	Enter Password: <input type="password" name="pass" placeholder="Password"/><br>
	<input type="submit" name="Submit"/>
</form>
<img src="pic.jpg">
</body>
</html>