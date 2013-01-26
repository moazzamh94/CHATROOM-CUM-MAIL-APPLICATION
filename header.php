<html>
<head>
<script src="../nicEdit.js" type="text/javascript"></script>
<?php
if(isset($_SESSION['id']))
{
if($_SESSION['inbox']!=1)
{
?>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<?php
}
}
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" charset="utf-8"></script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
<style type="text/css" media="screen"> @import url("menuh.css"); </style>
<style type="text/css">
#tarea
{
position:absolute;
top:80%;
left:10%;
width:65%;
height:15%;
background-color:#FFFFFF;
}
#tare
{
position:absolute;
top:80%;
left:10%;
width:65%;
height:15%;
background-color:#FFFFFF;
}
.nicEdit-panel {
}
#send
{
position:absolute;
left:71.35%;
top:95%;
}
</style>

<!--[if lt IE 7]>
<style type="text/css" media="screen">
#menuh{float:none;}
body{behavior:url(csshover.htc); font-size:100%;}
#menuh ul li{float:left; width: 100%;}
#menuh a{height:1%;font:bold 0.7em/1.4em arial, sans-serif;}
</style>
<![endif]-->
<script language="javascript">
/*function revise()
{
$.ajax({
    type: "POST",
     dataType: 'html',
     url: "p.php",
     //data: {"arr": f},
         cache: false,
         success: function(response)
         {
		     alert(response);
	         document.getElementById("toadd").innerHTML+=response;
            }
         });
} */
/*function ghvbv()
{
$.ajax({
    type: "POST",
     dataType: 'html',
     url: 'p.php',
	     data: {},
         cache: false,
         success: function(response)
         {
		    alert(response);
            }
         });

function h()
{
while(true)
{
$.ajax({
    type: "POST",
     dataType: 'html',
     url: 'p.php',
	     //data: {},
         cache: false,
         success: function(response)
         {
		    //if(response=="0") {alert("successfullybreaked");break;}
			qw=response;
            alert(qw);
			document.getElementById("it").innerHTML+=qw;
            }
         });
//if(qw=="0") break;
}

}
<?php
//if(isset($_SESSION['id']))
//{
?>
setInterval(h,8000);
<?php
//}
?>

*/
function g(){
var nicE = new nicEditors.findEditor('tare');
message = nicE.getContent();
$.ajax({
    type: "POST",
     dataType: 'html',
     url: "p.php",
     data: {"text": message},
         cache: false,
         success: function(response)
         {
            }
         });

nicE.setContent("");		 
}
function ga()
{
//message=document.getElementsByName("tx")[0];
alert($('#tare').html());
var message=document.getElementById("tare");
var msg = message.value;
alert(msg);
//alert('hiiiiiiiii');
alert(msg.innerHTML);
$.ajax({
    type: "POST",
     dataType: 'html',
     url: "p.php",
     data: {"text": message},
         cache: false,
         success: function(response)
         {
            }
         });
document.getElementById("tare").value='';
}
</script>
</head>
<body background="blue.jpg">
<div id="menuh-container">
<div id="menuh" align="center"> 
<center>
<?php
$flag=0;
if(isset($_SESSION['id'])) $flag=1; 
?>
<?php
if($flag==0)
{
?>
	   <ul>
		<li><a href="login.php" class="top_parent">LOGIN</a> </li>
	</ul>
<?php
}
?>
<ul>
		<li><a href="home.php" class="top_parent">HOME</a> </li>
</ul>
<?php
if($flag==1)
{
?>
    <ul>
		<li><a href="logout.php" class="top_parent">LOGOUT</a> </li>
	</ul>
	<ul>
	    <li> <a href="inbox.php" class="top_parent">INBOX</a> </li>
	</ul>
	<ul>
	    <li> <a href="compose.php" class="top_parent">COMPOSE</a> </li>
	</ul>
	<ul>
	    <li> <a href="sent_items.php" class="top_parent">SENT ITEMS</a> </li>
	</ul>
	<ul>
	    <li> <a href="draft.php" class="top_parent">DRAFTS</a> </li>
	</ul>
	<ul>
	
		<li><a href="#" class="top_parent">SETTINGS</a>
		<ul>
		<li><a href="change_password.php" class="top_parent">CHANGE PASSWORD</a></li>
		<li><a href="#" class="top_parent">DELETE ACCOUNT</a></li>
		</ul>
	</li>
	</ul>
<?php
}
if($flag!=1)
{
?>
	<ul>
		<li><a href="register.php" class="top_parent">REGISTER</a> </li>
	</ul>
<?php
}
?>
	
<!--		<ul>
			<li><a href="#">Sub 1:1</a></li>
			<li><a href="#" class="parent">Sub 1:2</a>
				<ul>
				<li><a href="#">Sub 1:2:1</a></li>
				<li><a href="#">Sub 1:2:2</a></li>
				<li><a href="#">Sub 1:2:3</a></li>
				<li><a href="#">Sub 1:2:4</a></li>
				</ul>
			</li>
			<li><a href="#">Sub 1:3</a></li>
			<li><a href="#" class="parent">Sub 1:4</a>
				<ul>
				<li><a href="#">Sub 1:4:1</a></li>
				<li><a href="#">Sub 1:4:2</a></li>
				<li><a href="#">Sub 1:4:3</a></li>
				<li><a href="#">Sub 1:4:4</a></li>
				</ul>
			</li>
			<li><a href="#" class="parent">Sub 1:5</a>
				<ul>
				<li><a href="#">Sub 1:5:1</a></li>
				<li><a href="#">Sub 1:5:2</a></li>
				<li><a href="#">Sub 1:5:3</a></li>
				<li><a href="#">Sub 1:5:</a></li>
				<li><a href="#">Sub 1:5:5</a></li>
				</ul>
			</li>
		</ul>
		</li>
	</ul>
	
	<ul>	
		<li><a href="#" >Item 2</a></li>
	</ul>
		
		... repeat and alter the list as needed 
	
</div> 	<!-- end the menuh-container div -->  
</center>
</div>	<!-- end the menuh div -->
</div>
<br>
<br>
<?php
if(isset($_SESSION['id']))
{
if($_SESSION['inbox']!=1)
{
?>
<iframe style="position:absolute;top:20%;left:78%;float:right" src="chatbox.php" height=76% width="18%" scrolling="auto">
</iframe>
<iframe style="position:absolute;top:24%;left:10%" src="chatters.php" height=55% width="65%">
</iframe>
<!--<script language="javascript">
setInterval(revise,2000);
</script>
<div id="toadd">
</div> -->
<form name="formchat">
<div id="tarea" >
<textarea id="tare" name="tare" onKeyDown="alert('hi');">
</textarea>
<input type="button" value="SEND" style="float:right;background-color:#FF0000;" onClick="g()"; id="send" accesskey="a"/>
</div>
</form>
<?php
}
}
?>

</body>