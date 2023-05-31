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
.main{margin-top:5px; padding-top:5px; padding-bottom:5px; color:red; background-color:rgba(239,14 238,0.5);}
.yy{background:tranparent; color:red; border:2px solid #C5240F; border-top:0%;}
</style>
<div class="fluid-container">
<div class="row">
<div class="col-md-6 offset-md-3">
<div class="main">
<center>
 
<?php
$n=$ns=$e=$es=$p=$ps=$a=$as="";
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
//message check 
function messagecheck()
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
	
	// phone
	if(phonecheck()=='y')
	{
		$p=trim($_POST['p']);
	}
	else 
	{
		$ps="*** check phone ";
	}
	//message check 
	if(messagecheck()=='y')
	{
		$a=trim($_POST['a']);
	}
	else 
	{
		$as="** check address";
	}	
	// all check 
	if(namecheck()=='y' && emailcheck()=='y'&& phonecheck()=='y' && messagecheck()=='y')
	{
	//	$r="name ".$n." email ".$e." phone ".$p." message ".$a;
		//echo $r;
		
		// khela start
		include"connection.php";
$dt=Date('Y-m-d');
$q="insert into enquire
(name ,email ,phone,message,date  )
values('".$n."','".$e."','".$p."','".$a."','".$dt."')";


$sq=mysqli_query($cn,$q);
if($sq)
{
$n=$ns=$e=$es=$p=$ps=$a=$as="";
	echo '<script> alert("thanks for enquiry")</script>';
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
name:<input type="text" name="n" value="<?php echo $n;?>" class="yy"> 
<span style="color:red"><?php echo $ns;?></span>
<br><br>
email:<input type="text" name="e" value="<?php echo $e;?>" class="yy"> 
<span style="color:red"><?php echo $es;?></span>
<br><br>
phone:<input type="text" name="p" maxlength="10" value="<?php echo $p;?>" class="yy"> 
<span style="color:red"><?php echo $ps;?></span>
<br><br>
message:<textarea name="a" class="yy" ><?php echo $a;?></textarea>
<span style="color:red"><?php echo $as;?></span><br><br>
<input type="submit" name="s">
<input type="submit" name="s1" value="clear">
</form>
</center>
</div>
</div>
</div>
</div>

<img src="t.jpg" style="top:0%; left:0%; width:100%; height:100%; position:fixed; z-index:-10; opacity:0.4;">
