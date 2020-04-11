<?php
session_start();
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
<h1>Contact Us Details</h1>
<table class="table table-hover">
<tr>
<th>S.No</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Mobile Number</th>
<th>Message</th>
</tr>
<?php
include("../connection.php");
$a=1;
$query="select * from message";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
?>

<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['lname'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['num'];?></td>
<td><?php echo $row['message'];?></td>
<td><a href="deletecontact.php?id=<?php echo $row['cust_id']?>">Delete</a></td>
</tr>

<?php
$a++;
}
?>
</table>
</div>

	</body>
	</html>
