<?php
session_start();
include("../connection.php");
if($_SESSION['user']=="")
{
	header("Location:index.php");
}
?>
<html>
<head>
<title>The Village</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sauna Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pop-up -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/lightbox.css">
<!-- //pop-up -->
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>
<!--/main-header-->
  <!--/banner-section-->
	<div id="demo-1" class="banner-inner">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
								<nav class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
																				
										 <h1><a  href="dashboard.php"><span style="font-size:35px">The Village</span> <p class="s-log" style="font-size:20px"></p></a>
										</h1>
									</div>
									<!-- navbar-header -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										
				 <ul class="nav navbar-nav">
											<li><a href="dashboard.php">Home</a></li>
													
												
												 <!--<li class="dropdown">
													<a href="codes.html" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">Pages <b class="caret"></b></a>
													 <ul class="dropdown-menu">
														<li><a href="icons.html">Font Icons</a></li>
													
														<li><a href="codes.html">Short Codes</a></li>
													</ul>
												</li>-->
       												
       												<li><a href="logout.php">Logout</a></li>
													
											
										</ul>


									</div>
									<div class="clearfix"> </div>	
								</nav>
									
					
							</div> 

			
		<!--//header-w3l-->
			<!--/banner-info-->
			<!--/banner-ingo-->
			
		</div>
		 </div>
  <!--/banner-section-->
 <!--//main-header-->
    <!-- breadcrumb -->
	<div class="col-sm-12" style="margin-top:4%;">
<?php
if($_SESSION['user']=="admin"){
$sql = "select * from usercart";
$qu = mysqli_query($conn,$sql);
while($u = mysqli_fetch_array($qu)){
$usql = "select * from register where email='".$u['email']."'";
$uq = mysqli_query($conn,$usql);
$user = mysqli_fetch_assoc($uq);

echo '<div class="">User Name : '.$user['name'].'</div>';
echo '<div class="">User Email : '.$user['email'].'</div>';
echo '<div class="">Contact No :  '.$user['contact'].'</div>';
echo '<div class="">Address :  '.$user['address'].'</div>';
echo'
<table border="1" align="center">
<tr>
    <th>Dishes : </th>
    <th>Quantity:  </th>
	<th>Price:  </th>
</tr>

';

$sql = "select * from usercart where email='".$u['email']."'";
$qu1 = mysqli_query($conn,$sql);
while($r = mysqli_fetch_assoc($qu1)){
echo'
<tr>
    <td>'.$r['name'].'</td>
    <td>'.$r['quantity'].'</td>
	<td>'.$r['price'].'</td>
</tr>


'
;
}
echo'</table>'
;

$sum = "select sum(price) as value from usercart where email='".$u['email']."'";
$sq = mysqli_query($conn,$sum);
$fetch = mysqli_fetch_array($sq);

echo'<div class="well" style="">Total Price:: '.$fetch['value'].'</div>

'
;

}

}

?>
</div>

	</body>
	</html>
