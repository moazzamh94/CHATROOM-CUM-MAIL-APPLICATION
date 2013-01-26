<?php
include("connect.php");
if(!(isset($_SESSION['name'])))
{
header('Location:home.php');
exit;
}
$name=$_SESSION['name'];
$password=$_SESSION['password'];
$username=$_SESSION['username'];
echo $name."<br>".$password;
$t=mysql_query("INSERT INTO `chat`.`member` (
`name` ,
`username` ,
`password` ,
`id`
)
VALUES (
'$name', '$username', '$password', NULL )");
$rt=mysql_fetch_array(mysql_query("select * from `member` where `name`='$name'"));
$i=$rt['id']."i";
$s=$rt['id']."s";
$d=$rt['id']."d";
$_SESSION['flag']=0;
mysql_query("CREATE TABLE IF NOT EXISTS `$i` (`textid` int(11) NOT NULL,`fromid` int(11) NOT NULL,`time_enter` datetime NOT NULL,`id` int(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1") or die(mysql_error());
mysql_query("CREATE TABLE IF NOT EXISTS `$s` (`textid` int(11) NOT NULL,`toid` int(11) NOT NULL,`time_enter` datetime NOT NULL,`id` int(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1") or die(mysql_error());
mysql_query("CREATE TABLE IF NOT EXISTS `$d` (`textid` int(11) NOT NULL,`time_enter` datetime NOT NULL,`id` int(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1") or die(mysql_error());
header('Location:home.php');
?>