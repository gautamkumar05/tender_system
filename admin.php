<?php
ob_start();
session_start();
if($_SESSION['aid']!=session_id())
{
	header("location:login.php");
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<nav class="navbar navbar-expand-lg navbar-light bg-warning
">
  <a class="navbar-brand" href="#"><b>TENDER </b>
  
  
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
  <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"/>
  <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z"/>
</svg>
  </a>
  <button class="navbar-toggler Dark link" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link Dark link" href="admin.php">ADMIN</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link Dark link" href="adcompany.php">COMPANY</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link Dark link" href="adtender.php">TENDER</a>
      </li>
	 
	   <li class="nav-item">
        <a class="nav-link Dark link" href="adenquiry.php">ENQUIRY</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link Dark link" href="end.php">LOGOUT</a>
      </li>
      
    </ul>
    <!--
	<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	 !-->
  </div>
</nav>
<style>
.main{margin-top:5px; padding-top:2px; padding-bottom:5px; color:white; background-color:#EFD90E;}
</style>
<div class="fluid-container">
<div class="row">
<div class="col-md-12">
<div class="main">

<center>
<?php
$n=$_SESSION['a']; 
echo '<br> welcome '.$n;
?>
</center>


</div>
</div>
</div>
</div>

<div class="fluid-container">
<div class="row">
<div class="col-md-4">
<div class="main">

<h1 align="center">Total number of enquiry
<?php
include"connection.php";
$q="select * from enquire";
$sq=mysqli_query($cn,$q);
$enq=0;
while($r=mysqli_fetch_array($sq))
	{
		$enq++;
	}
echo"<br>".$enq;
?>
</h1>

</div>
</div>
</div>
</div>



 
</div>
</div>

<div class="fluid-container">
<div class="row">
<div class="col-md-4">
<div class="main">
<h1 align="center">TOTAL NUMBER OF COMPANY
<?php
include"connection.php";
$q="select * from company";
$sq=mysqli_query($cn,$q);
$com=0;
while($r=mysqli_fetch_array($sq))
{
$com++;
}
echo '<br>'.$com;


?>

</h1>


</div>
</div>
<div class="col-md-4">
<div class="main">
<h1 align="center">TOTAL NUMBER TENDER
<?php
include"connection.php";
$q="select * from tender";
$sq=mysqli_query($cn,$q);
$ten=0;
while($r=mysqli_fetch_array($sq))
{
$ten++;
}
echo '<br>'.$ten;


?>

</h1>


</div>
</div>
<div class="col-md-4">
<div class="main">
<h1 align="center">TOTAL NUMBER OF BIDDING
<?php
include"connection.php";
$q="select * from bidding";
$sq=mysqli_query($cn,$q);
$bid=0;
while($r=mysqli_fetch_array($sq))
{
$bid++;
}
echo '<br>'.$bid;


?>

</h1>

</div>
</div>
</div>
</div>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
		 var enq=<?php echo $enq;?>;
		var com=<?php echo $com;?>;
		var ten=<?php echo $ten;?>;
		var bid=<?php echo $bid;?>;



	 function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['record', 'number of record'],
          ['enquiry'+enq,    enq],
          ['company'+com,    com],
          ['tender'+ten,  ten],
          ['bidding'+bid,  bid],
          
        ]);

        var options = {
          title: 'TOTAL RECORD TILL DATE',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
                  