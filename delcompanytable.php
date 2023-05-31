<?php 
if(isset($_GET['id']))
{
	$id =$_GET['id'];
	include"connection.php";
	$q="delete from company where id='".$id."'";
	$sq=mysqli_query($cn,$q);
	if($sq)
	{
		header("location:displaycompany.php");
	}
	else 
	{
		echo'<br>'.mysqli_error($cn);
	}
	
}
else 
{
	header("location:displaycompany.php");
}
?>
