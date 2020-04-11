<?php
session_start();
if(isset($_SESSION['email'])){
unset($_SESSION['email']);
header("refresh:0; url=user_login.php");
}
?>