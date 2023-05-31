<?php 
// function to add code of connection page  

include"connection.php";

$q="create table company 
(cid int(5) auto_increment primary key,
name varchar(50) not null,
email varchar(50) not null unique,
password varchar(50) not null,
phone varchar(50) not null,
address varchar(500) not null,
photo varchar(500) not null)";

$sq=mysqli_query($cn,$q);
if($sq)
{
	echo 'created';
}
else 
{
	echo '<br>'.mysqli_error($cn);
}
