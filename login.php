<?php
session_start();
include("connection.php");

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
    $sql = "select * from register where email='$email' and password='$password'";
    $qu = mysqli_query($conn,$sql);
    if(mysqli_num_rows($qu) == true){
		$row = mysqli_fetch_array($qu);
		$_SESSION['user'] = $row;
		$_SESSION['email'] = $row['email'];
		if(isset($_SESSION['user'])){
		    header("location:cart1.php");	
		}
	}else{
		echo'<div class="well text-center">Please Fill Correct Details </div>';
		header("refresh:1; url=user_login.php");
	}
}
 
?>  
