<?php
$server="localhost"; // same for all 
$user="root"; // same for all 
$password="gautam"; // mysql password 

// function to connect to mysql 
$cn=mysqli_connect($server,$user,$password);
if($cn)
{
	// sql query 
	$q="create database gautam";
	// function to run sql query 
	$sq=mysqli_query($cn,$q);
	if($sq)
	{
		echo 'create';
	}
	else
	{
	// function to show sql query error 
		echo'<br>'.mysqli_error($cn);
	}
	
}
else 
{
// function to show connection error
echo '<br>'.mysqli_connect_errno();
echo '<br>'.mysqli_connect_error();
}

?>