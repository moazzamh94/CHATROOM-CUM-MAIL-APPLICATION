<?php
$s=$_POST['checks'];
include("connect.php");
$id=$_SESSION['id'];
$folder=$id."d";
$up="";
$w=(mysql_query("select * from `$folder`"));
$i=0;
while($t=mysql_fetch_array($w))
{
$id=$t['id'];
if($s[$i]==1)
{
$up=$up."delete from `$folder` where `id`='$id';";
}
$i++;
}
echo $up."<br>";
mysql_query("$up") or die(mysql_error());
?>
