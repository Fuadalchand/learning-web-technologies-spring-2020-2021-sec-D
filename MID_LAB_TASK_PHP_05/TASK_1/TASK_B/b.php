<html>
<head>
	<title>My Name</title>
</head>
<body>


<form action="b.php" method="get">
	<fieldset>
		<legend>NAME</legend>
Name: <input type="text" name="myname"><br>
<input type="submit">
</fieldset>
</form>
<br>
Welcome <?php 
if(isset($_GET['myname'])) echo $_GET["myname"] ?>

</body>
</html>