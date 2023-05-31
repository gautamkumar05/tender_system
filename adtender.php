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
      <li class="nav-item active">
        <a class="nav-link Dark link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
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

<hr color="red">

<?php
$n=$ns= $a=$as= $d1=$ds1=$d2=$ds2 =$ms="";
//check t name 
function namecheck()
{
	$n=trim($_POST['n']);
	$nc='/^[a-zA-Z ]*$/';
	if(preg_match($nc,$n) && strlen($n)>0)
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}


//tender detail check 
function addresscheck()
{	
$a=trim($_POST['a']);
	if(strlen($a)>0)
	{
		return 'y'; 
	}
	else 
	{
		return 'n';
	}
	
}
// start date check 
function sdatecheck()
{
	if($_POST['d1']!='')
	{
		//system date or current date
		$sy=Date('Y');  
		$sm=Date('m');  
		$sd=Date('d');
// change days 
			$sdays=($sy-1)*365 + ($sm-1)*30 +$sd;
	// enter date 
		$d1=$_POST['d1'];
		$ey=Date('Y',strtotime($d1));
		$em=Date('m',strtotime($d1));
		$ed=Date('d',strtotime($d1));
	$edays=($ey-1)*365 + ($em-1)*30 +$ed;
	
$diff =($edays-$sdays);
		if($diff>=0 && $diff<=30)
		{
		return 'y';
		}
		else 
		{
		return 'n';
		}

	}
	else 
	{
		return 'n';
	}
}

// end date check 
function edatecheck()
{
	if($_POST['d2']!='')
	{
	// trt enter date 
		$d1=$_POST['d1'];
		$sy=Date('Y',strtotime($d1));
		$sm=Date('m',strtotime($d1));
		$sd=Date('d',strtotime($d1));
	$sdays=($sy-1)*365 + ($sm-1)*30 +$sd;
	// en enter date 
		$d2=$_POST['d2'];
		$ey=Date('Y',strtotime($d2));
		$em=Date('m',strtotime($d2));
		$ed=Date('d',strtotime($d2));
	$edays=($ey-1)*365 + ($em-1)*30 +$ed;
	
$diff =($edays-$sdays);
		if($diff>0 )
		{
		return 'y';
		}
		else 
		{
		return 'n';
		}

	}
	else 
	{
		return 'n';
	}
}
// photo check 
function photocheck()
{
	if($_FILES['m']['name']!='')
	{
		$fn=$_FILES['m']['name'];
		$ln=strlen($fn);
		$dot=strrpos($fn,".");
		$ext=substr($fn,$dot+1,$ln);
		$col=array('jpg','png','jpeg','bmp','jfif');
		if(in_array($ext,$col))
		{
			return 'y';
		}
		else 
		{
			return 'n';
		}
	}
	else 
	{
		return 'n';
	}
}



if(isset($_POST['s']))
{
	// name 
	if(namecheck()=='y')
	{
		$n=trim($_POST['n']);
	}
	else 
	{
		$ns="*** check name ";
	}
	
	
	
	//address check 
	if(addresscheck()=='y')
	{
		$a=trim($_POST['a']);
	}
	else 
	{
		$as="** check address";
	}	
	// start date check 
	if(sdatecheck()=='y')
	{
		$d1=Date('Y-m-d',strtotime($_POST['d1']));
	}
	else 
	{
		$ds1="** check date";
	}
	
	// end date check 
	if(edatecheck()=='y')
	{
		$d2=Date('Y-m-d',strtotime($_POST['d2']));
	}
	else 
	{
		$ds2="** check date";
	}
	//photo
	if(photocheck()=='n')
	{
		$ms="** check photo";
	}
	
	// all check 
	if(namecheck()=='y' && addresscheck()=='y'&& sdatecheck()=='y' && edatecheck()=='y')
	{
		//$r="name ".$n." address ".$a."start  date ".$d1 "end  date ".$d2;
		//echo $r;
		
		$fn=$_FILES['m']['name'];
		$ta=$_FILES['m']['tmp_name'];
		$fa='load/'.uniqid().$fn;
		move_uploaded_file($ta,$fa);
//      echo '<img src="'.$fa.'" width="100" height="100">';
		
		// khela start
		include"connection.php";
$q="insert into tender
(name , start_date , end_date ,tender_detail, photo)
values('".$n."','".$d1."','".$d2."','".$a."','".$fa."')";


$sq=mysqli_query($cn,$q);
if($sq)
{
$n=$ns =$d1=$ds1 =$d2=$ds2 =$a=$as =$f=$fa="";
	echo '<script> alert("thanks for Register in company")</script>';
}
else 
{
	echo '<br>'.mysqli_error($cn);
}
		
		
		// khela end 
	}
	else 
	{
	echo '<br> check';
		//echo '<script>alert("check")</script>';
	}
}


?>
<form action="" method="POST" enctype="multipart/form-data">
TENDER NAME:<input type="text" name="n" value="<?php echo $n;?>"> 
<span style="color:red"><?php echo $ns;?></span>
<br><br>
START DATE [within 30 days ]:
<input type="date" name="d1" value="<?php echo $d1; ?>">
<span style="color:red"><?php echo $ds1;?></span>
<br><br>
END DATE [after start date ]:
<input type="date" name="d2" value="<?php echo $d2; ?>">
<span style="color:red"><?php echo $ds2;?></span>
<br><br>
TENDER DEATILS:<textarea name="a"><?php echo $a;?></textarea>
<span style="color:red"><?php echo $as;?></span>
<br><br>
PHOTO:<input type="file" name="m">
<span style="color:red"><?php echo $ms;?></span>
<br><br>
<input type="submit" name="s">
<input type="submit" name="s1" value="clear">
</form>
<hr color="red">
<?php
include"connection.php";

$q="select * from tender";

$sq=mysqli_query($cn,$q);
if($sq)
{
	// check if any data found or not 
	if(mysqli_fetch_array($sq)>0)
	{
	$sq=mysqli_query($cn,$q);
echo '<table border="1"><tr bgcolor="silver">
<th>TENDER_ID </th> 
<th>TENDER_NAME </th><th>START_DATE</th> <th>END_DATE</th> 
<th>TENDER_DETAIL</th> <th>TENDER_PHOTO</th>
<th>delete</th>
</tr>'; 
		while($r=mysqli_fetch_array($sq))
		{
			echo '<tr> <th>'.$r['t_id'].'</th>';
		
			echo ' <th> '.$r['name'].'</th>';
			echo ' <th> '.$r['start_date'].'</th>';
			echo ' <th> '.$r['end_date'].'</th>';
			echo ' <th> '.$r['tender_detail'].'</th>';
			echo ' <th> <img src="'.$r['photo'].'" width="50" height="50"></th>';
			$t_id=$r['t_id'];
echo ' <th><a href="addeltender.php?t_id='.$t_id.'"> delete</a></th>';
			echo'</tr>';
		}
	echo '</table>';
	}
	else 
	{
		echo'<br> no record found ';
	}
}
else 
{
	echo '<br>'.mysqli_error($cn);
}


?>

</center>
</div>
</div>
</div>
</div>



 
 