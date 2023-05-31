<?php 
// function to add code of connection page  

include"connection.php";

$q="create table bidding
(bid int(5) auto_increment primary key,
bid_cid int(5) not null,
date  date not null,
bid_rate int(50) not null,
bid_detail  varchar(500) not null,
status varchar(500) DEFAULT'pending')";

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