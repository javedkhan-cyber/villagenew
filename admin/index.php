 <?php 
     include("../connection.php");
	 session_start();
     if(isset($_POST['sub']))
         { 
           $email=$_POST['email'];
           $pass=$_POST['pass'];
                            $sq= "select * from tbl_admin where email='$email' and password='$pass'" ; 
                            $qn=  mysqli_query($conn, $sq);
                            
                            if(mysqli_num_rows($qn))
                            { $fet=  mysqli_fetch_assoc($qn);
                                $_SESSION['user']=$email;  
                                header('location:dashboard.php');
                                                           
                            }
                            else
                            {
							 
                             echo "<script> alert('Username or Password is incorrect') </script>" ;
							 
							
                            } 
		 }

		 ?>	
		 
		 
		 
		 					

	<html lang="en-US">
<head>
<title>Login Admin</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="css/hover.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-2.1.4.min.js"></script>


<script src="../js/bootstrap.js"></script>
 
</head>
<body>


 
 <!--Middle portion-->
 
	<div class="col-sm-12">
	<div class="row">
		<div class="col-sm-12" >
		<h1 class="text-center" style="color:#4285F4;text-center:50%;"><span style="border-bottom:4px solid black;">Admin Login</span></h1>
		</div>
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6 login">
			<div class="col-sm-12">
		
				<form action="" method="post">
				
				<div class="col-sm-12"style="margin-top:4%;">
				<div class="input-group">
					
					<input type="text" class="form-control" name="email" id="email" placeholder="Enter Userid/Email" required /><span class="input-group-addon"><span class="fa fa-user"></span></span>
				</div>
				</div>
				<div class="col-sm-12" style="margin-top:2%;">
				<div class="input-group" style="margin-top:4%;">
					<input type="password" class="form-control" name="pass"  id="pass" placeholder="Enter Password" required /><span class="input-group-addon"><span class="fa fa-pencil"></span></span>
				</div>
				</div>
				
				<div class="col-sm-12">
					<input type="Submit" name="sub" id="sub" class="form-control loginbtn" value="Submit" style="font-size:20px;width:100%;height:6%;margin-top:7%;"/>
					</div>
				</form>
				
				
			</div>
			
		</div>
		
		<div class="col-sm-3">
		</div>
		
	</div>
 </div>

 
 <!--//-->
 <!--Footer-->
 	
</body>
</html>