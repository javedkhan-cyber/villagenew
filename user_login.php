<?php
include("header1.php");
include("connection.php");

?>
  <div class="container"><br><br>
			        <div class="row">
<div class="col-md-6">

       <div class="panel panel-default">
          <div class="panel-heading" style="text-align:center;">Register Here</div>
             <div class="panel-body">
	           <form method="post">
			       
                   <input class = "form form-control" type = "text" placeholder = "Name" name= "name" required>
				  <br/>
				   
                    <input name="email" type="email" placeholder="Email address" class="form form-control"/>
					<br/>
                    <input name="password" type="password" placeholder="Enter Password" required="required" class="form form-control"/>
					<br/>
                    <input name="contact" type="number" placeholder="Mobile No." required="required"  class="form form-control"/>
					<br/>
                    <input name="address" type="text" placeholder="Address" required="required" class="form form-control"/>
					<br>
                   <input type="submit" value="Continue " class="btn btn-danger btn-block" name="submit"/>
                </form>
				<?php
				if(isset($_POST['submit'])){
			        $name  = $_POST['name'];	
			        $email = $_POST['email'];	
			        $password  = $_POST['password'];	
			        $contact  = $_POST['contact'];	
			        $address  = $_POST['address'];	
				    $sel_sql = "select * from register where email='".$email."'";
				    $sel_qu = mysqli_query($conn,$sel_sql);
					if(mysqli_num_rows($sel_qu) == true){
						echo 'Please Insert Different Email';
					}else{
						$ins_sql = "insert into register(name,email,password,contact,address) values('".$name."','".$email."','".$password."','".$contact."','".$address."')";
						if(mysqli_query($conn,$ins_sql)){
							echo '<div class="well text-center"> Data Inserted. Login Now... </div>';
						}
					}
				
				
				
				
				
				
				
				}
				?>
           </div>
     </div>

	
</div>	
	
	



 
                   

<div class="col-md-6">
 <div class="panel panel-default">
          <div class="panel-heading" style="text-align:center;">Login</div>
             <div class="panel-body">
<form action="login.php" method="post">
 <input class = "form form-control" type = "email" placeholder = "Enter Your Email" name= "email" required>
 <br>
<input class = "form form-control" type = "password" placeholder = "Password" name= "password" required>
<br>
<input type="submit" value="Login" name="login" class="btn btn-danger btn-block"/>
</form>
</div>
 </div>
</div>
</div>





			</div>
<?php
include("footer.php");
?>