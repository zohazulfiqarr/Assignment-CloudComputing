<?php
	session_start();

	$n = $_POST['name'];
	$p = $_POST['pass'];

	$db = mysqli_connect("localhost", "root", "", "cafe");
	$q = "select name,password from students where name='$n' and password='$p'";
	$query = mysqli_query($db, $q);
	$row = mysqli_fetch_assoc($query);

		if(mysqli_num_rows($query)>0){
		
		
			header('location: ver.php');
		}
		else{
			echo "wrong information";
		}
		
			
		

?>