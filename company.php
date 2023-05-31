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
        <a class="nav-link Dark link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link Dark link" href="company.php">company sign</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link Dark link" href="login.php">login</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link Dark link" href="enquirey.php">enquiry</a>
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
.main{margin-top:5px; padding-top:5px; padding-bottom:5px; color:white; background-color:#EFD90E;}
</style>
<div class="fluid-container">
<div class="row">
<div class="col-md-12">
<div class="main">
<center>

<?php

$n=$ns=$e=$es=$pp=$pps=$p=$ps=$a=$as=$f=$fa=$ms="";
//check name 
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

//check email 
function emailcheck()
{
	$e=trim($_POST['e']);
	$ec='/^[a-zA-Z0-9._]*\@[a-zA-Z0-9]*\.[a-zA-Z.]{2,6}$/';
	if(preg_match($ec,$e) )
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}
//password check 
function passwordcheck()
{	
$pp=trim($_POST['pp']);
	if(strlen($pp)>=4)
	{
		return 'y'; 
	}
	else 
	{
		return 'n';
	}
	
}

//check phone
function phonecheck()
{
	$p=trim($_POST['p']);
	$pc='/^[0-9]{10,10}$/';
	if(preg_match($pc,$p) && $p[0]>=6 )
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}

//address check 
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
	
	// email
	if(emailcheck()=='y')
	{
		$e=trim($_POST['e']);
	}
	else 
	{
		$es="*** check email ";
	}
	// password
	if(passwordcheck()=='y')
	{
		$pp=trim($_POST['pp']);
	}
	else 
	{
		$pps="** check password";
	}	
	
	// phone
	if(phonecheck()=='y')
	{
		$p=trim($_POST['p']);
	}
	else 
	{
		$ps="*** check phone ";
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
				//photo
	 
	if(photocheck()=='n')
	{
		$ms="** check photo";
	}
	
	// all check 
	if(namecheck()=='y' && emailcheck()=='y'&& passwordcheck()=='y' && phonecheck()=='y' && addresscheck()=='y')
{
		//$r="name ".$n." email ".$e. "password".$pass. " phone ".$p." address ".$a;
		//echo $r;
		  
		
		$fn=$_FILES['m']['name'];
		$ta=$_FILES['m']['tmp_name'];
		$fa='load/'.uniqid().$fn;
		move_uploaded_file($ta,$fa);
		//echo '<img src="'.$fa.'" width="100" height="100">';
		
		// khela start
		
			
				
		include"connection.php";
		$q="insert into company
		(name ,email ,password ,phone, address, photo  )
		values('".$n."','".$e."','".$pp."','".$p."','".$a."','".$fa."')";


$sq=mysqli_query($cn,$q);
if($sq)
{
$n=$ns=$e=$es=$pp=$pps=$p=$ps=$a=$as=$f=$fa="";
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
name:<input type="text" name="n" value="<?php echo $n;?>"> 
<span style="color:red"><?php echo $ns;?></span>
<br><br>
email:<input type="text" name="e" value="<?php echo $e;?>"> 
<span style="color:red"><?php echo $es;?></span>
<br><br>
password:<input type="text" name="pp"><?php echo $pp;?>
<span style="color:red"><?php echo $pps;?></span>
<br><br>
phone:<input type="text" name="p" maxlength="10" value="<?php echo $p;?>"> 
<span style="color:red"><?php echo $ps;?></span>
<br><br>

address:<textarea name="a"><?php echo $a;?></textarea>
<span style="color:red"><?php echo $as;?></span>
<br><br>

photo:<input type="file" name="m">
<span style="color:red"><?php echo $ms;?></span>
<br><br>
<input type="submit" name="s">
<input type="submit" name="s1" value="clear">
</form></center>
</div>
</div>
</div>
</div>



 
<img src="t.jpg" style="top:0%; left:0%; width:100%; height:100%; position:fixed; z-index:-10; opacity:0.4;">