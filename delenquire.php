<?php
if(isset($_GET['e_id']))
{
	$e_id=$_GET['e_id'];
	include"connection.php";
	$q="delete from enquire where e_id='".$e_id."'";
	$sq=mysqli_query($cn,$q);
	if($sq)
	{
		header("location:displayenquiry.php");
	}
	else 
	{
		echo '<br>'.mysqli_error($cn);
	}
}
else 
{
	header("location:displayenquiry.php");
}

?>