<?php
session_start();
include("header1.php");
include ('connection.php');

 
?>
<?php
$mm=$_SESSION['email'];

$query="select sum(price) from usercart where email='$mm'";
//die();
$res=mysqli_query($conn,$query);
  
 if($row=mysqli_fetch_assoc($res)){  
    //header("Location: cart.php"); 
//echo $row['price'];
//die();	

$a=$row['sum(price)'];
 }else{
	echo "username or password is not match"; 
 }
  

 


if(!isset($_SESSION["user"])){

//header("Location: userLogin.php");
	 
	 

	}else{
?>

         <div class="container">
		 <div class="heading text-right"></div>
                <div class="col-md-12 well" id="box">
                <div id="logbox">
                 
                  <form id="signup"  method="POST" >
                    
                    <div class="col-md-6">
                    <h2 class="text-center">Continue Process</h2><br>
              
<form action="#" method="post">
         

   

            
               <b>Total Amount:</b>  
  <?php
$query1="select * from register where email='$mm'";
//die();
$res1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_assoc($res1);
//echo $name;
//die();
?>  
            <input name="amount" placeholder="Amount" value=" <?php echo $a;?>" readonly required="required" class="form form-control"  /><br/>
                    
                    <input name="firstname" value="<?php echo $row1['name']; ?>"  placeholder="Name: " required="required" class="form form-control"  readonly/><br/>
                    <input name="email" value="<?php echo $mm; ?>" required="required" class="form form-control"   readonly/></br>
                    <input name="phone" placeholder="Phone:" value="<?php echo $row1['contact']; ?>"  required="required" class="form form-control" readonly/><br/>
					<b>Address:</b> 
                   <textarea name="address"  class="form form-control" style="height:100px;" /></textarea><br>
                
                
                  

                
                
                    
                    <td colspan="3">
                
               
          <input type="submit" name="submit" value="Order " class="btn btn-success"/>
                     
                    </div></form>
                     <div class="col-md-6 col-xs-12">
                   <h2 class="text-right"> <?php echo $_SESSION['user']['name']; ?>
				    <a href="logout.php" class="btn btn-danger" style="text-decoration:none;">Logout</a>
				   </h2>
                     <br><br><br><br>
                     
                     <h4 style="color:#e3c754;">Cart</h4>
               <hr style="border-top:2px solid #e3c754; ">
               <table class="table table-hover">
    <thead>
      <tr>
        <th style="color: #e3c754;">Name</th>
        <th style="color: #e3c754;">Quantity</th>
        <th style="color: #e3c754;">Price</th>
        <th></th>
      </tr>
    </thead>
    
    <tbody>
	<?php
	
	if(isset($_POST['submit']))
	{
	$amount=$_POST['amount'];
	$firstname=$_POST['firstname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	

    $query2 ="insert into booking(amount,name,email,phone,address)values('$amount','$firstname','$email','$phone','$address')";
    $res2=mysqli_query($conn,$query2)	;
	if($res2)
	{
	echo"<script>alert('Your Order Successfully');
	window.location.href='payment1.php'; 
	</script>";
	}
   
	else
	{
	echo"<script>alert('Process Failed')</script>";
	}
	}
	?>
	
	
<?php  
$query3="select * from usercart where email='$mm'";  
$res3=mysqli_query($conn,$query3);  
while($row3= mysqli_fetch_assoc($res3)){  ?>
      <tr>
          <td><?php echo"{$row3['name']}";?></td>
          <td><?php echo"{$row3['quantity']}";?></td>
        <td><?php echo"{$row3['price']}";?>&nbsp;&#x20a8;</td>
        <td></td>
      </tr><?php
 } 
	}
//mysqli_close($conn);  
?>  
      
                                </tbody>
                                <tfoot>
                                    <tr border="1">
                                     
                                        <td colspan="1" align="right"><b style="color: #e3c754;">Total &nbsp;=</b>  <?php echo $a;?>&nbsp;&#x20a8;</td>
                                        <td colspan="3" id="cart_total" align="right"></td>
                                    </tr>
                                    
                                </tfoot>

                        </td>

               </table>
                     
                    </div>
                  
                  </center>
                </div>
               </div>
			   
			   
            </div>	<br><br><br><br>	<br><br><br><br>
      
	</div>
<?php include("footer.php");
?>