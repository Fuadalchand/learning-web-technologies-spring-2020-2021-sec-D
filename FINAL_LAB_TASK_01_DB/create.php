<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			//$user_id = random_num(20);
			$query = "insert into users (user_name,password,repass,email) values ('$user_name','$password','$repass','$email')";

			$result=mysqli_query($con, $query);
			if($result)
{
	echo "New User Created";
}
else
{
	echo "Action Failed";
}


			header("Location: create.php");
			die;
		}else
		{
			echo "enter information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>

	
<form method="post" >
	
	

			User name: <input id="text" type="text" name="user_name"><br><br>
			Password: <input id="text" type="password" name="password"><br><br>
			Re-password: <input id="text" type="password" name="repass"><br><br>
			E-mail: <input id="text" type="email" name="email"><br><br>

			<input id="button" type="submit" value="Submit"><br><br>

			
</form>	
	<br>
Copyright@2021

</body>
</html>