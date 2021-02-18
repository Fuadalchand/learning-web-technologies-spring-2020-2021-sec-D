<!DOCTYPE html>
<html>
<head>
	<title>My E-mail</title>
</head>
<body>
	<form method="get" action="c.php">
		<fieldset>
			<legend>EMAIL</legend>
			E-mail: <input type="text" name="email" value="<?php if(isset($_GET['email'])){ echo $_GET['email'];} ?>"> <br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	<br>
		Your mail is <?php 
		if(isset($_GET['email'])) echo $_GET["email"] ?>
	
</body>
</html>