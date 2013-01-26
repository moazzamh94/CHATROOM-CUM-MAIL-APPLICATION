<?php
include("connect.php");
include("header.php");

if(isset($_SESSION['error']))
{
?>
<script language="javascript">
alert("<?php echo $_SESSION['error']?>");
</script>
<?php
unset($_SESSION['error']);
}
?>
<form method="post" action="check_login.php">
<table>
<tr>
<td>
USER NAME
</td>
<td>
<input type="text" name="username"  />
</td>
</tr>
<tr>
<td>
PASSWORD
</td>
<td>
<input type="password" name="password"  />
</td>
</tr>
</table>
<input type="submit" value="LOGIN" name="submit" />

</form>