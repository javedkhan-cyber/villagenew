<?php 
session_start();
include('../connection.php');
if($_SESSION['user']=="")
{
	header("location:index.php");
}
?>
<?php
	if($_SESSION['user']=="admin"){

		
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
																				
										 <h1><a  href="dashboard.php"><span style="font-size:32px">The Village</span> <p class="s-log" style="font-size:20px"></p></a>
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
	
	

			 <form method="post" enctype="multipart/form-data">
                     <div class="panel panel-default">
    <div class="panel-heading text-center"><h2>View Order Detail</h2></div>
    <div class="panel-body">
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"><br>
<table class="table table-bordered table-hover table-striped">
		<thead class="bg-warning">
		<tr>
		
		<th>SR. NO.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Address</th>
		<th>Amount</th>
		
		

		
		</tr></thead>
		<tbody>
	   <?php
	   $count=1;
		$sql="select * From booking";
		$run=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_array($run))
		  {
		?>
		<tr>
		<td><?php echo $count++; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['phone']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['amount']; ?></td>
		<td><a href="delorder.php?id=<?php echo $row['id']?>">Delete</a></td>
		
	  
		

	
		</tr>
		  <?php } ?>
		</tbody>
		</table>
    <div class="col-sm-2"></div>
	
	
	</div>
	</div>
  </form>
  </div>
  <?php }  ?>
	</div>
	</body>
	</html>