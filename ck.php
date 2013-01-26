<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" charset="utf-8"></script>
<script src="../ckeditor/ckeditor.js"></script>
<style type="text/css">
<link rel="stylesheet" href="../ckeditor/samples/sample.css">
</style>
<meta charset="utf-8">
<script src="../ckeditor/ckeditor.js"></script>
<pre>


</pre>
<textarea class="ckeditor" name="cc" cols="=50" id="editor1" rows="40" style="visibility: hidden; display: none; position:static; top:400px;">
</textarea>
<script language="javascript">
function g()
{
var tt =CKEDITOR.instances["cc"];
alert(tt.getData);
}
</script>
<input type="button" onClick="g()" value="GO">
<input type="text">