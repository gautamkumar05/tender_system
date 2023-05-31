<?php 
// function to add code of connection page  

include"connection.php";

$q="create table tender 
(t_id int(5) auto_increment primary key,
name varchar(50) not null,
start_date  date not null,
end_date  date not null,
tender_detail varchar(500) not null,
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
?>