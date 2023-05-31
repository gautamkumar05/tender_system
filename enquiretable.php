<?php 
// function to add code of connection page  

include"connection.php";

$q="create table enquire 
(e_id int(5) auto_increment primary key,
name varchar(50) not null,
email varchar(50) not null,
phone varchar(15) not null,
message varchar(500) not null ,
date  date not null)";

$sq=mysqli_query($cn,$q);
if($sq)
{
	echo 'created';
}
else 
  {
	echo '<br>'.mysqli_error($cn);
  }
?>