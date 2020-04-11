<?php
session_start(); 
include ('connection.php');
  
 $u=$_SESSION['email'];
 //echo $u;
 //die();
//$mul = "sultan.m1logix@gmail.com";



$query="delete from usercart where email='$u'";
mysqli_query($conn,$query);
header("Location:cart1.php");
?>
 
