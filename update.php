<?php
include("connect.php");
$last=$_SESSION['last_chat_id'];
$t=mysql_query("select * from `message` where `id` > '$last'");
if(mysql_num_rows($t)==0) exit;
$eq=0;
$n=mysql_num_rows($t);
while($y=mysql_fetch_array($t))
{
//if($y['id']<=$last) continue;
$from=$y['from'];
$e=mysql_fetch_array(mysql_query("select * from `member` where `id`='$from'"));
$name=$e['name'];
$time=$y['time_enter'];
if($n==1)
{
$eq=$y['id'];
}
echo "<br><b>$name</b>:";
?>
<font style="float:right;color:#FF0000" >
<?php echo $time;?>
</font>
<?php
echo nl2br($y['text']);
echo "<br>";
$n=$n-1;
}
$_SESSION['last_chat_id']=$eq;
$last=$_SESSION['last_chat_id'];
?>