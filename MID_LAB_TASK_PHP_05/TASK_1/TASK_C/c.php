<!DOCTYPE html>
<html>
<head>
	<title>My Name</title>
</head>
<body>
	<form method="get" action="c.php">
		<fieldset>
			<legend>Name</legend>
			Name: <input type="text" name="myname" value="<?php if(isset($_GET['myname'])){ echo $_GET['myname'];} ?>"> <br>
			
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	<br>
	Welcome <?php 
	if(isset($_GET['myname'])) echo $_GET["myname"] ?>
	
</body>
</html>