<style type="text/css">
tr:hover
{
background-color:#99FFFF;
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" charset="utf-8"></script>
<?php
include("connect.php");
$_SESSION['inbox']=1;
include("header.php");
$id=$_SESSION['id'];
$table=$id."i";
$r=mysql_query("select * from `$table`");
?>
<script language="javascript">
function gg(f)
{
re=document.getElementById(f).value;
document.getElementById(f).value=1-re;
}
function hu()
{
y="";
for(var i=0;i<count;i++)
{
y=y+document.getElementById(i).value;
}
$.ajax({
    type: "POST",
     dataType: 'html',
     url: "delete_message_inbox.php",
     data: {"checks": y},
         cache: false,
         success: function(response)
         {
		 window.location="inbox.php";
            }
         });
}
</script>
<pre>

</pre>
<input type="button" style="background-color:#FFFF00" onclick="hu()" value="DELETE">
<table width="100%" border="1px">
<tr bgcolor="#FF0000">
<th>
</th>
<th width="27%">
FROM
</th>
<th width="60%">
SUBJECT
</th>
<th width="10%">
TIME
</th>
</tr>
<script language="javascript">
count=0;
array_id=new Array();
</script>
<?php
$id=0;
while($t=mysql_fetch_array($r))
{
$messageid=$t['textid'];
$messagequery=mysql_fetch_array(mysql_query("select * from `mail` where `id`='$messageid'"));
$subject=$messagequery['subject'];
?>
<tr>
<td>
<input type="checkbox" value="0" id="<?php echo $id;?>" onclick="gg(<?php echo $id;?>)"/>
</td>
<td>
<?php
$x=$t['fromid'];
$xx=mysql_fetch_array(mysql_query("select * from `member` where `id`=$x"));
$n=$t['textid'];
$nn=mysql_fetch_array(mysql_query("select * from `mail` where `id`='$n'"));
$messid=$nn['id'];
?>
<a href="<?php echo "compose.php ? tobesent=$x";?>" >
<?php echo $xx['name']; ?>
</a>
</td>
<td>
<a href="<?php $es=$t['id']; $entertime=$t['time_enter']; echo "show_message_inbox.php ? mailid=$messid & fromid=$x & entertime=$entertime & unicid='$es'"; ?>"><?php echo $subject;if($subject=='') echo "NO SUBJECT";?></a>
</td>
<td>
<?php echo date("l jS \of F Y h:i:s A", strtotime($t['time_enter'])); ?>
</td>
</tr>
<script language="javascript">
count++;
</script>
<?php
$id++;
}
?>
<?php
$_SESSION['inbox']=0;
?>
