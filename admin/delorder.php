<?php
include("../connection.php");
$id=$_REQUEST['id'];
$query="delete from booking where id='$id'";
mysqli_query($conn,$query);
header("Location:booking.php");
?>