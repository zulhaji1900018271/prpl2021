<?php
$user = $_POST['user'];
$password = $_POST['password'];
$query = mysql_query("SELECT * FROM $table where nama='$user'");
$result = mysql_fetch_array($query);
$row = mysql_num_rows($query);
if(($user == "") && ($password == ""))
{
print "<center>Anda belum memasukkan username dan password !";
exit;
}
if($row != 0)
{
if($password != $result['password'])
{
print "<center>Password salah !";
}
else
{
setcookie("nama",$user);
print "<center>Anda telah berhasil login dengan nama
$user<br><a href=index.php><font color=blue>Back to home</a>";
}
}
else
{
print "<center>Maaf, Username tidak terdaftar !<br>Silahkan daftar dulu
<a href='index.php?register=masukkan nama,email,dan password untuk daftar'><font
color=blue>disini</a></font>";
}
?>
<?php mysql_close($connect); ?>