<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_DB";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
