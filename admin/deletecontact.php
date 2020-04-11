<?php
include("../connection.php");
$id=$_REQUEST['id'];
$query="delete from message where cust_id='$id'";
mysqli_query($conn,$query);
header("Location:viewcontact.php");
?>