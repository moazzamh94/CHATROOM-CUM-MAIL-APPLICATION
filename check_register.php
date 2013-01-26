<?php
include("connect.php");
$_SESSION['name']=$_REQUEST['name'];
$_SESSION['password']=$_REQUEST['password'];
$_SESSION['username']=$_REQUEST['username'];
header('Location:save_register.php');
?>