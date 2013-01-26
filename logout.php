<?php
include("connect.php");
$id=$_SESSION['id'];
mysql_query("UPDATE `member` SET `online` = '0' WHERE `id` ='$id'") or die(mysql_error());
unset($_SESSION['id']);
session_destroy();
header('Location:home.php');
?>