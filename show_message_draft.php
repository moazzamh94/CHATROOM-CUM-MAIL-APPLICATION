<?php
include("connect.php");
$_SESSION['inbox']=1;
include("header.php");
$messid=$_REQUEST['mailid'];
$folder=$_SESSION['id']."d";
$rq=mysql_fetch_array(mysql_query("select * from `$folder` where `id`='$messid'"));
?>
<a href="previous.php" style=" background-color:#666666">PREVIOUS</a>
<a href="next.php" style=" background-color:#CCFFFF">NEXT</a>
<a href="<?php echo "compose.php ? draftid=$messid";?>" style=" background-color:#CCFFFF">REPLY</a>
<div style="background-color:#FFFFFF; ">
<?php
echo $rq['text'];
$_SESSION['inbox']=0;
?>
</div>