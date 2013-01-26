<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" charset="utf-8"></script>
<script src="../ckeditor/ckeditor.js"></script>
<script language="javascript">
function g()
{
alert(editor.getData());
}
</script>
<style type="text/css">
<link rel="stylesheet" href="../ckeditor/samples/sample.css">

</style>
<meta charset="utf-8">
<script src="../ckeditor/ckeditor.js"></script>
<textarea name="html_link_content" id="content">TEXT</textarea>      
<script type="text/javascript">
      var editor = CKEDITOR.replace('html_link_content');

/*  =====INSTANCE====== */
var instance = CKEDITOR.instances.content;
instance.updateElement();
$("#output").attr("value",instance.getData());
</script>
<input type="button" onclick="g()"/>