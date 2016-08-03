<?php 
include "include/koneksi.php";
session_start();
if(isset($_SESSION['user']))
{
header("index.php");
exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="" >
<table>
<tr>
<td>Username</td>
<td>:</td>
<td><input type=text name="username" /></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type=password name="password" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type=submit name="sb" value="login" /></td>
</tr>

</table>

</form>
<?php 
if(isset($_POST['sb']))
{
$username=$_POST['username'];
$password=md5($_POST['password']);
$cek=mysql_num_rows(mysql_query("select * from calon where username='$username' and password='$password'"));
if($cek==0)
{
echo "<script>alert('Username Atau Password Salah');</script>";

}
else
{
$_SESSION['user']==$username;
header("location:index.php");
}
}
?>
</body>
</html>
