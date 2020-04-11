<?php

include ('connection.php');
$m=$_GET["df"];


$query="delete from usercart where id='$m'";
mysqli_query($conn,$query);
header("Location:cart1.php");
?>
 
