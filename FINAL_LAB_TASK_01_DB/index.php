<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	

	<br>
	<a href="create.php">Create New User |</a>
	<a href="userlist.php">View User List |</a>
	<a href="logout.php">Logout</a>


	
<br>
Copyright@2021
		
</body>
</html>