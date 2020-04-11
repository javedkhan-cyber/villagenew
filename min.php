<?php
session_start();
include ('connection.php');


if($_SESSION==NULL)
{
header('location:user_login.php');

}
$sname=$_SESSION['email'];
$id=$_GET["sect"];
//echo $id;



$query= "SELECT * FROM newsub_menu where sub_id='$id'";  
$res=mysqli_query($conn,$query);  
  
 
 while($row = mysqli_fetch_assoc($res)){  
 $name="{$row['name']}";
  $quantity="{$row['quantity']}";
   $price="{$row['price']}";
   $idss="{$row['id']}";
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
	$sum1=$quant-$bbb;
	$mul=$price*$sum1;
	
	
}
if($sum1==0){
	
	
	//echo$username;
$query3= "delete from usercart where id='$id'";
mysqli_query($conn,$query);
header("Location:cart1.php");
	
}else{
	

if($s==$g1){
		//echo"efw";
		//ewrf////////////////
		//update file...............
$query4= "update usercart set quantity='$sum1',price='$mul' where id='$s'";
mysqli_query($conn,$query4);
header("Location:cart1.php");	//insert/////////////////
}}
	?>