
<?php
session_start();
if($_SESSION['user']=="")
{
	header("Location:index.php");
}
?>
<?php include('../connection.php');

if(isset($_POST['sub'])){
$menu=$_POST['menu'];
$file_name=$_FILES['file']['name'];
$file_type=$_FILES['file']['type'];
$file_size=$_FILES['file']['size'];
$tmp_name=$_FILES['file']['tmp_name'];
$location='../upload/';

                                $sq= "insert into menu(menu_name,photo,date)values('$menu','$file_name',curdate())";
                                $qu= mysqli_query($conn,$sq);
								move_uploaded_file($tmp_name,$location.$file_name);
									
                                
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
																				
										 <h1><a  href="index.php"><span style="font-size:32px">The Village</span> <p class="s-log" style="font-size:20px"></p></a>
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
	<div class="container" >
	<form action="" method="post" enctype="multipart/form-data">
	<table>
	<tr><td>
	Enter Main Menu</td><td><input type="text" name="menu" required />
	</td></tr>
	<tr><td>
	Image </td><td><input type="file" name="file" required />
	
	</td></tr>
	<tr><td>
	<input type="submit" name="sub" value="submit">
	</td></tr>
	</table>
	</form>
	</div>
	</body>
	</html>