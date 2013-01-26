<?php
include("connect.php");
$_SESSION['inbox']=1;
include("header.php");
?>
<pre>

</pre>
<form action="check_changepassword.php">
<table width="25%" border="1px" bgcolor="#FFFF00">
<tr>
<td>
OLD PASSWORD:
</td>
<td>
<input type="password" name="opass"  />
</td>
</tr>
<tr>
<td>
NEW PASSWORD:
</td>
<td>
<input type="password" name="npass"  />
</td>
</tr>
<tr>
<td>
CONFIRM PASSWORD
</td>
<td>
<input type="password" name="cpass"  />
</td>
</tr>
</table>
<input type="submit" value="CHANGE PASSWORD" style="background-color:#0000FF;color:#FF00FF"  />
</form>
<?php
$_SESSION['inbox']=0;
?>