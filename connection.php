<?php

$servername;
$username;
$password;
$dbname;

$conn= mysqli_connect($servername,$username,$password,$dbname);


if($conn)
{
	echo"Vipul Rajesh Prabhu Shirodkar";
	
	
}
else
{
	die("connection failed because".mysqli_connect_error());
}
?>