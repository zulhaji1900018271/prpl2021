<style type="text/css">
<!--
.style3 {font-size: 24px}
-->
</style>
<form name="form1" method="post" action="index.php?register2=success">
<table width="400" border="0">
<tr>
<td colspan="2"><span class="style3">Register</span></td>
</tr>
<tr>
<td>Nama : </td>
<td><input name="nama" type="text" id="nama"></td>
</tr>
<tr>
<td>Email : </td>
<td><input name="email" type="text" id="email"></td>
</tr>
<tr>
<td>Password : </td>
<td><input name="password" type="password" id="password"></td>
</tr>
<tr>
<td >Confirm Password : </td>
<td><input name="c_password" type="password" id="c_password"></td>
</tr>
<tr>
<td colspan="2"> </td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="Submit" value="Register"></td>
</tr>
</table>
</form>
<?php mysql_close($connect); ?>