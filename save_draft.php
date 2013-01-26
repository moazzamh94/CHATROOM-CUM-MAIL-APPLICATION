<?php
include("connect.php");
$datainform=$_POST['inf'];
$id=$_SESSION['id'];
$folder=$id."d";
if($_REQUEST['wetherupdate']==1)
{
$entryid=$_REQUEST['entryid'];
mysql_query("update `$folder` set `text`='$datainform',`time_enter`=NOW() where `id`='$entryid'") or die(mysql_error());
}
else
{
mysql_query("insert into `$folder` (`text`,`time_enter`) values('$datainform',NOW())") or die(mysql_error());
}
$ww=mysql_fetch_array(mysql_query("select * from `$folder` where `text`='$datainform'"));
$entryid=$ww['id'];
echo $entryid;
$_SESSION['entryid']=$entryid;
?>