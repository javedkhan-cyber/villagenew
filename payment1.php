<?php
session_start();
include("header1.php");
include ('connection.php');

 
?>
<?php
$mm=$_SESSION['email'];

$query= "select sum(price) from usercart where email='$mm'";
$res=mysqli_query($conn,$query);  
  
 
 if($row= mysqli_fetch_assoc($res)){  
    //header("Location: cart.php");  
 
 }else{
	echo "username or password is not match"; 
 }
  

 


if(!isset($_SESSION["user"])){

//header("Location: userLogin.php");
	 
	 

	}else{
?>

<div class="container" style="">
  
  <div class="text-right well"> 
  <h2 style="text-align:left;font-weight:bold;">Thanks for order.........</h2>
  <button class="btn" style="background-color:transparent;"><i class="fa fa-user fa-1x"></i><p style="letter-spacing:1px;text-transform:uppercase;color:black;font-family:arial;font-size:15px;"><?php echo $_SESSION['user']['name']; ?></p></button>
  
  
  <a href="logout.php" class="btn btn-danger" style="text-decoration:none;">Logout</a></div><br>
  <div class="panel panel-default">
    <div class="panel-heading text-center"></div>
    <div class="panel-body">
	               <table class="table table-hover">
    <thead>
      <tr>
        <th style="color: black;">Name</th>
        <th style="color: black;">Quantity</th>
        <th style="color:black;">Price</th>
        <th></th>
      </tr>
    </thead>
    
    <tbody>
	       <?php  

$query2= "select * from usercart where email='$mm'";  
$res2=mysqli_query($conn,$query2);  
  
 
 while($row2= mysqli_fetch_assoc($res2)){  ?>
      <tr>
          <td><?php echo"{$row2['name']}";?></td>
          <td><?php echo"{$row2['quantity']}";?></td>
        <td><?php echo"{$row2['price']}";?>&nbsp;&#x20a8;</td>
        <td></td>
      </tr>
	  <?php
 } 
	}
//mysqli_close($conn);  
?>  
      
                                </tbody>
                                <tfoot>
                                    <tr border="1">
                                     
                                        <td colspan="1" align="right"><b style="color: black;">Total &nbsp;=</b>  <?php echo"{$row['sum(price)']}";?>&nbsp;&#x20a8;</td>
                                        <td colspan="3" id="cart_total" align="right"></td>
                                    </tr>
                                    
                                </tfoot>

                       

               </table>
	
	<?php
  
	
	
//mysqli_close($conn);  
?>  
	</div>
	</div>
	</div>
<?php include("footer.php");
?>