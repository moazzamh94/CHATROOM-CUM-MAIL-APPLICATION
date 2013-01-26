<?php
include("connect.php");
$_SESSION['inbox']=1;
include("header.php");
$messid=$_REQUEST['mailid'];
$fromid=$_REQUEST['fromid'];
$rq=mysql_fetch_array(mysql_query("select * from `mail` where `id`='$messid'"));
$qq=mysql_fetch_array(mysql_query("select * from `member` where `id`='$fromid'"));
$zc=$qq['name'];
?>
<br  />
<a href="<?php $unicid=$_REQUEST['unicid'];echo "compose.php ? tobesent=$zc & mail_textid=$messid & unicid=$unicid"; ?>" style=" background-color:#666666">REPLY</a>
<a href="previous.php" style=" background-color:#666666">PREVIOUS</a>
<a href="next.php" style=" background-color:#CCFFFF">NEXT</a>
<table border="1px" bgcolor="#FFFF00">
<tr>
<td width="70%">
<b><h2>FROM:</h2></b>
</td>
<td><h3><?php echo $qq['name'];?></h3>
</td>
</tr>
<tr>
<td>
<b><h2>SUBJECT:</h2></b>
</td>
<td> <h2> <?php echo $rq['subject'];?> </h2> </td>
</tr>
<tr>
<td>
<b><h2>TIME:</h2></b>
</td>
<td> <h2> <?php echo $_REQUEST['entertime'];?> </h2> </td>
</tr>
</table>
<div style="background-color:#FFFFFF; ">
<?php
echo $rq['textmessage'];
$_SESSION['inbox']=0;
?>
</div>