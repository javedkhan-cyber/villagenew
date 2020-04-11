<?php
session_start();
include('connection.php');


if($_SESSION==NULL)
{
header('location:user_login.php');

}
$sname=$_SESSION['email'];
$id=$_GET["sub_id"];
//echo $id;
//die();
//echo $id;



$query= "SELECT * FROM newsub_menu where sub_id='$id'";  
$res=mysqli_query($conn,$query);  
  
 
 while($row = mysqli_fetch_assoc($res)){  
 $name="{$row['name']}";
  $quantity="{$row['quantity']}";
   $price="{$row['price']}";
   $idss="{$row['sub_id']}";
   //echo $name;
  
} 
//die(); 
$query2= "select * from usercart where email='$sname' and id='$id'";  
$res2=mysqli_query($conn,$query2);  
  
 
 if($row2 = mysqli_fetch_assoc($res2)){  
 $name1="{$row2['name']}";
  $quant="{$row2['quantity']}";
   
   $g1="{$row2['id']}";
  
	//echo $price;
	$s=$id;
	$bbb=1;
	$sum1=$quant+$bbb;
	$mul=$price*$sum1;

 
 if($s==$g1){
		//echo"efw";
		//ewrf////////////////
		//update file...............
$query3= "update usercart set quantity='$sum1',price='$mul' where id='$s'";
	mysqli_query($conn,$query3);
header("Location:cart1.php");	//insert/////////////////
	}
 }
	else
	{
	//register file...............
$query4= "insert into usercart(id,name,quantity,price,email)values('$idss','$name','$quantity','$price','$sname')";
mysqli_query($conn,$query4);
	header("Location:cart1.php");
	}

?>
