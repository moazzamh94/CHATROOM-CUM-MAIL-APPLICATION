<?php error_reporting(E_ERROR | E_PARSE); ?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>
<?php
//include("connect.php");
session_start();
$id=$_SESSION['id'];
?>
<head>
<!--<style type="text/css">
div:hover
{
background-color:#00FFFF;
}
</style>-->
<script language="javascript">
id=<?php echo $id ?>;
</script>
</head>
<?php
include("connect.php");
$id=$_SESSION['id'];
$w=mysql_fetch_array(mysql_query("select * from `member` where `id`='$id'"));
$name=$w['name'];
$t=mysql_query("select * from `member` where `online`=1");
while($i=mysql_fetch_array($t))
{
$x=$i['id'];
$q=$i['name'];
if($i['name']!=$name)
echo "<div> $q  <br></div>";
}
?>