<?php 
include_once('connection.php');  

if(isset($_POST['update']))
{

	$query = "UPDATE users SET user_name = '$_POST[user_name]',password = '$_POST[password]',repass = '$_POST[repass]',email = '$_POST[email]' WHERE user_name = '$_POST[user_name]'";
	$result=mysqli_query($con,$query); 

if($result)
{
	echo "Successfull";
}
else
{
	echo "Failed";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>

<form method="post" >
	
	
		
		

			User name: <input id="text" type="text" name="user_name"><br><br>
			Password: <input id="text" type="password" name="password"><br><br>
			Re-password: <input id="text" type="password" name="repass"><br><br>
			E-mail: <input id="text" type="email" name="email"><br><br>

			<input id="button" type="submit" name="update" value="Next"><br><br>

		
		
</form>
		<br>
Copyright@2021

</body>
</html>