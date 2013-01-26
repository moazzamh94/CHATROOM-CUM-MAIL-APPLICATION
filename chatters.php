<?php
include("connect.php");
$id=$_SESSION['id'];
$ww=mysql_fetch_array(mysql_query("select * from `member` where `id`='$id'"));
$name=$ww['name'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>
<style type="text/css" media="screen"> @import url("menuh.css"); </style>
<!--[if lt IE 7]>
<style type="text/css" media="screen">
#menuh{float:none;}
body{behavior:url(csshover.htc); font-size:100%;}
#menuh ul li{float:left; width: 100%;}
#menuh a{height:1%;font:bold 0.7em/1.4em arial, sans-serif;}
</style>
<![endif]-->
<script language="javascript">
function y()
{
$.ajax({
    type: "POST",
     dataType: 'html',
     url: "update.php",
         cache: false,
         success: function(response)
         {
		   document.getElementById("x").innerHTML+=response;
            }
         });
//window.scrollTo(0, document.body.scrollHeight);
//document.body.scrollTop = 20000;
//$(document).scrollTop($(document).height()+500);
window.scroll(0,100000);
}
setInterval(y,2000);
</script>
</head>
<body bgcolor="#99FF66">
<div id="x">
<?php
$t=mysql_query("select * from `message` where `time_enter` > (now() - interval 30 minute)");
$n=mysql_num_rows($t);
while($y=mysql_fetch_array($t))
{
if($n==1)
{ 
$_SESSION['last_chat_id']=$y['id'];
}
$ff=$y['from'];
$rr=mysql_fetch_array(mysql_query("select * from `member` where `id`='$ff'"));
$mm=$rr['name'];
$time=$y['time_enter'];
echo "<br><b>$mm</b>:";
?>
<font style="float:right;color:#FF0000" >
<?php
echo "$time";
?>
</font>
<?php
echo nl2br($y['text']);
echo "<br>";
$n=$n-1;
}
?>
</div>
<h6>
<font color="#0000FF">
TYPE IN YOUR MESSAGE BELOW
</font>
</h6>
</body>