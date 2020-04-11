<?php
include("../connection.php");
$id=$_REQUEST['id'];
$query="delete from tbl_reserve where id='$id'";
mysqli_query($conn,$query);
header("Location:view_tbl_reserve.php");
?>