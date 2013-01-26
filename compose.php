<html xmlns="http://www.w3.org/1999/xhtml">
<form action="check_compose.php" method="post">
<?php
$_SESSION['entryid']=-1;
include("connect.php");
$_SESSION['inbox']=1;
include("header.php");
?>
<div id="last_saved">
last saved on
</div>
<script type="text/javascript" src="../jQuery-Autocomplete-master/scripts/jquery-1.8.2.min.js" charset="utf-8"></script>
<script src="../ckeditor/ckeditor.js"></script>

<style type="text/css">
<link rel="stylesheet" href="../ckeditor/samples/sample.css">
body {
    width: 400px;
}

</style>
<meta charset="utf-8">
<link href="../jQuery-Autocomplete-master/content/styles.css" rel="stylesheet" />
<script src="../ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../jQuery-Autocomplete-master/src/jquery.autocomplete.js"></script>
<!--<script type="text/javascript" src="../jQuery-Autocomplete-master/scripts/jquery-1.8.2.min.js"> </script>
--><pre>

</pre>
<?php
$ff=mysql_query("select * from `member`");
?>
<script language="javascript"> var helplist=new Array();</script>
<?php
while($ww=mysql_fetch_array($ff))
{
?>
<script language="javascript">
helplist.push("<?php echo $ww['name']?>");
</script>
<?php
}
if(isset($_REQUEST['mail_textid']))
{
$tp=$_REQUEST['mail_textid'];
$qr=mysql_fetch_array(mysql_query("select * from `mail` where `id`='$tp'"));
$tosent=$_REQUEST['tobesent'];
$id=$_SESSION['id'];
$fol=$id."i";
$unicid=$_REQUEST['unicid'];
$pz=mysql_fetch_array(mysql_query("select * from `$fol` where `id`=$unicid"));
}
?>
TO: 
<!--<div class="container">-->
<input type="text"  name="to" id="query" style="width:95%;" value="<?php if(isset($_REQUEST['tobesent'])) echo $_REQUEST['tobesent'];?>"/>
<div id="selection"></div>
<!--</div>
--><br />
CC: <input type="text" name="carbon" style="width:95%;"  />
<br/>
<br />
SUBJECT: <input type="text" name="subject" style="width:91.5%;" value="<?php if(isset($_REQUEST['mail_textid'])){echo "Re:[".$qr['subject']."]";} ?>"/>
<br/>
<br/>
<textarea name="html_link_content" id="content">
<font color="#FF0000">
<?php
if(isset($_REQUEST['mail_textid']))
{
$tos=$_REQUEST['tobesent'];
echo "On  ".date("l jS \of F Y h:i:s A", strtotime($pz['time_enter']))." $tos wrote:";
echo $qr['textmessage']."<hr><br>";
}
?>
</font>
<?php
if(isset($_REQUEST['draftid']))
{
$draftid=$_REQUEST['draftid'];
$fo=$_SESSION['id']."d";
$sz=mysql_fetch_array(mysql_query("select * from `$fo` where `id`='$draftid'"));
echo $sz['text'];
}
?>
</textarea>      
<script type="text/javascript">
      var editor = CKEDITOR.replace('html_link_content');
/*  =====INSTANCE====== */
var instance = CKEDITOR.instances.content;
instance.updateElement();
$("#output").attr("value",instance.getData());
</script>
<input type="submit" value="SEND MAIL"/>
</form>
<script type="text/javascript">
wetherupdate=0;
entryid=-1;
function ut()
{
inf=editor.getData();
$.ajax({
    type: "POST",
     dataType: 'html',
     url: "save_draft.php",
	 data: {"inf": inf,"wetherupdate":wetherupdate,"entryid":entryid},
         cache: false,
         success: function(response)
         {
		   //alert(response);
		   wetherupdate=1;
		   entryid=response;
		   
		   }
         });
document.getElementById("last_saved").innerHTML="<font color='#FF0000'>LAST SAVED ON"+new Date()+"</font>";
}
setInterval(ut,5000)
$(function () {
    'use strict';

    $.ajax({
        //url: 'content/countries.txt',
        //dataType: 'json'
    }).done(function (data) {
        
            //countries = $.map(data, function (value) {
            //    return value;
            //});
			
        $('#query').autocomplete({
            lookup: helplist,
            onSelect: function (suggestion) {
                
				
            }
        });
    });
});
</script>
<?php
$_SESSION['inbox']=0;
?>
</html>

