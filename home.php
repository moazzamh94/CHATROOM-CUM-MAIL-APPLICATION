<?php
include("connect.php");
$flag=0;
if(isset($_SESSION['id']))
{
$id=$_SESSION['id'];
$e=mysql_fetch_array(mysql_query("select * from `member` where `id`='$id'"));
$name=$e['name'];
$password=$e['password'];
$username=$e['username'];
$flag=1;
}
include("header.php");
if($flag==1) echo '<h1><center><font color="#FF00FF">hi '. "$name".'</font></center></h1>';
?>
<br />
<style type="text/css">
b
{
background:#99FF99;
volume:loud;
}
</style>
<?php
if(isset($_SESSION['inform']))
{
?>
<script language="javascript">
alert("<?php echo $_SESSION['inform'];unset($_SESSION['inform'])?>");
</script>
<?php
}
?>