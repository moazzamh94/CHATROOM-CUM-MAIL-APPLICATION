<?php
include("connect.php");
$textmessage=$_REQUEST['html_link_content'];
$subject=$_REQUEST['subject'];
$carbon=$_REQUEST['carbon'];
$to=$_REQUEST['to'];
$e=mysql_fetch_array(mysql_query("select * from `member` where `name`='$to'")) or die(mysql_error());
mysql_query("INSERT INTO `chat`.`mail` (`id`, `textmessage`, `subject`, `copy`) VALUES (NULL, '$textmessage', '$subject', '2');") or die(mysql_error());
$toid=$e['id'];
$inbox=$toid."i";
$id=$_SESSION['id'];
$sent=$id."s";
$fromid=$_SESSION['id'];
$entry=mysql_fetch_array(mysql_query("select * from `mail` where `textmessage`='$textmessage' and `subject`='$subject'")) or die(mysql_error());
$textid=$entry['id'];
mysql_query("insert into `$inbox` (`textid`,`fromid`,`time_enter`,`id`) VALUES('$textid','$fromid',NOW(),NULL)") or die(mysql_error());
mysql_query("insert into `$sent` (`textid`,`toid`,`time_enter`,`id`) VALUES('$textid','$toid',NOW(),NULL)") or die(mysql_error());
$_SESSION['inform']="successfully sent";
echo $_SESSION['entryid'];
if($_SESSION['entryid']!=-1)
{
$entryid=$_SESSION['entryid'];
$storage=$id."d";
mysql_query("DELETE FROM `$storage` WHERE `id` = '$entryid'") or die(mysql_error());
//echo "DELETE FROM `$storage` WHERE `id` = '$entryid'";
}
header('Location:home.php');
?>