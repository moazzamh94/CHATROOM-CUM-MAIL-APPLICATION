<?php
include("connect.php");
$_SESSION['inbox']=1;
include("header.php");
$messid=$_REQUEST['mailid'];
$rq=mysql_fetch_array(mysql_query("select * from `mail` where `id`='$messid'"));
?>
<a href="previous.php" style=" background-color:#666666">PREVIOUS</a>
<a href="next.php" style=" background-color:#CCFFFF">NEXT</a>
<div style="background-color:#FFFFFF; ">
<?php
echo $rq['textmessage'];
$_SESSION['inbox']=0;
?>
</div>