<?php
include("connect.php");
include("header.php");
?>
<form method="post" action="check_register.php">
<table>
<tr>
<td>
NAME
</td>
<td>
<input type="text" name="name"  />
</td>
</tr>
<tr>
<td>
USERNAME
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
<tr>
<td>
CONFIRM PASSWORD
</td>
<td>
<input type="password" name="cpass"  />
</td>
</tr>
</table>
<input type="submit" value="SUBMIT"  />
</form>