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
$table=$id."d";
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
     url: "delete_message_draft.php",
     data: {"checks": y},
         cache: false,
         success: function(response)
         {
		 window.location="draft.php";
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
$messageid=$t['id'];
$messagequery=mysql_fetch_array(mysql_query("select * from `mail` where `id`='$messageid'"));
$subject=$messagequery['subject'];
?>
<tr>
<td>
<input type="checkbox" value="0" id="<?php echo $id;?>" onclick="gg(<?php echo $id;?>)"/>
</td>
<td>
<a href="<?php echo "show_message_draft.php ? mailid=$messageid"; ?>"> <div style="height:2em; overflow:hidden"> <?php echo $t['text'];?>" </div>
.........
</a>
</td>
<td>
<?php echo $t['time_enter']; ?>
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
