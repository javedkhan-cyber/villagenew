<?php

session_start();
include("header1.php");


include("connection.php");
if($_SESSION['email']==Null)
{
header('location:user_login.php');

}
else
{
$mm=$_SESSION['email'];


  ?>
  
   <div class="container"><br>
         <div class="row" style="margin-top:2%;opacity:0.8;">
          <div class="col-md-6" style="height:550px;overflow:auto;border-radius:5px;box-shadow:0px 2px 3px 2px white;">
             <?php  

$query="SELECT * FROM menu"; 
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res)) 
{  
 $p="{$row['menu_id']}";
 //echo $p;
 //die();
    //echo "EMP ID :{$row['ids']}  <br> ";  
	//echo $cc;
	?>
  <br>
    

               <div id="curr">
                 <br>
                  <h4  class="text-center" style="color:orange;font-size:20px;"><?php echo"{$row['menu_name']}";?></h4><br>
          
                  <!--content begin-->
                     <table id="food" class="table table-responsive">
                        <tr>
                          <tbody>
								 <?php  

$query1="SELECT * FROM newsub_menu where id='$p'";  
$res1=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_assoc($res1))
{  
 //$cc="{$row['ids']}";
  //  echo "EMP ID :{$row['ids']}  <br> ";  
	//echo $cc;
	?>
                                  
                                    <tr>
                                        <td  style="padding-left:21px;">
				<h4 style="float:left;color:orange;" ><?php echo"{$row1['name']}";?><td>&nbsp;&nbsp;&nbsp
</td></td><td style="padding-top:1px;color: orange;padding-top:27px;text-transform:capitalize;">price&nbsp;<b>:</b><?php echo"{$row1['price']}";?>
&nbsp;&#x20a8;</td>
<td style="padding-left:100px;padding-top:20px;">
                <a href="cartreg.php?sub_id=<?php echo"{$row1['sub_id']}";?>&& name=<?php echo "{$row1['name']}";?> && quant=<?php echo $row1['quantity'];?> && id=<?php echo $row1['id'];?> && price=<?php echo $row1['price'];?>" class="btn btn-default" style="color: red;font-size: 20px;text-decoration: none;"><i class="fa fa-plus">&nbsp;Add</i>	</a></td>
                                            
                                          </h4>
                                    </tr><?php
 } //end of while  
 
 
?>  </tbody>
                     
                        </tr>
                     </table>
                  
                  <!--content end-->
               </div><?php
 } //end of while  
 
 
?>  
              
            </div>
<div class="col-md-5" style="height:550px;overflow:auto;border-radius:5px;box-shadow:0px 2px 3px 2px white;margin-left:2%;width:47%;"><h4 style="color:orange;font-size: 15px;" class="text-center">
<button class="btn" style="background-color:transparent;"><i class="fa fa-user fa-4x"></i><p style="letter-spacing:1px;text-transform:uppercase;color:orange;font-family:arial;font-size:20px;"><?php echo $_SESSION['user']['name']; ?></p></button>
</h4>
             <h4 style="float: right;" class="text-right"><a href="cartDelete.php" class="btn btn-warning" style="text-decoration:none;">Empty cart</a>
			 <a href="logout.php" class="btn btn-danger" style="text-decoration:none;">Logout</a>
			 </h4>
               <hr style="border-top:2px solid orange;width:100%; ">
			
               <table class="table">
    <thead>
      <tr>
        <th style="color: black;font-size: 20px;">Name</th>
        <th style="color: black;font-size: 20px;">Quantity</th>
        <th style="color: black;font-size: 20px;padding-left:5px;">Price</th>
        <th></th>
      </tr>
    </thead>
    
    <tbody>
      <?php  
//$mm="sanjeev.m1logix@gmail.com";
$query2="select * from usercart where email='$mm'";  
$res2=mysqli_query($conn,$query2);  
  
 
 while($row2= mysqli_fetch_assoc($res2)){  
 //$cc="{$row['id']}";
   //echo "EMP ID :{$re['price']}  <br> ";  
	//echo $cc;
	?>
	<tr>
          <td style="color:orange;font-size: 15px;float:left;"><?php echo"{$row2['name']}";?></td>
          <td><a href="Add.php?sect=<?php echo"{$row2['id']}";?>&code=022"><span class="fa fa-plus-square"style="color:orange;font-size: 15px;"><?php echo"{$row2['quantity']}";?></span></a><a href="min.php?sect=<?php echo"{$row2['id']}";?>&code=021"><span class="fa fa-minus-square" style="color: orange;font-size: 15px;"></span></a></td>
        <td style="color:orange;font-size: 15px;font-weight:none;"><?php echo"{$row2['price']}";?>&nbsp;&#x20a8;</td>
        <td><a href="delete.php?df=<?php echo"{$row2['id']}";?>"style="color: orange;"><span class="fa fa-trash-o" style="color: orange;font-size: 15px;"></span></a></td>
      </tr>
                                </tbody><?php
 } 

$query3="select sum(price) from usercart where email='$mm'";
$res3=mysqli_query($conn,$query3);  
$row3= mysqli_fetch_assoc($res3); 
?>  

                                <tfoot>
                                    <tr border="1">
                                    
                                        <td colspan="1" align="right"><b style="color: orange;font-size: 15px;">Total &nbsp;= price <?php echo $row3['sum(price)'];?>&nbsp;&#x20a8;</b></td>
                                        <td colspan="3" id="cart_total" align="right"><a href="payment.php"><button type="submit" class="btn btn-Primary pull-right">Checkout</button></a></td>
                                    </tr></tfoot>
             </table>
			 </div>
			 </div>
			 </div>
<?php } ?>
  <?php 
    include("footer.php");
  ?>