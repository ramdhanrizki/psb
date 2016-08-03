<html>
<head>
<title>Login Administrator</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->
</head>

<body>
<?php 
include "../modul/koneksi.php";
if(isset($_POST['login']))
{
$user=$_POST['user'];
$pass=md5($_POST['pass']);
$cek=mysql_query("select * from ppdb_admin where username='$user' and password='$pass'");
$num=mysql_num_rows($cek);
$row=mysql_fetch_array($cek);
if($num==0)
{
echo "<div id=error>USERNAME ATAU PASSWORD SALAH</div>";
}
else
{
session_start();
$_SESSION['psb_id']=$row['id_admin'];
$_SESSION['psb_username']=$row['username'];
$_SESSION['psb_nama']=$row['nama'];
header("location:index.php");
}

}

?>

<div id="loginForm">
	<div class="headLoginForm">
	Login 
	</div>
	<div class="fieldLogin">
	<form method="POST" action="">
	<label>Username</label><br>
	<input type="text" class="login" name=user><br>
	<label>Password</label><br>
	<input type="password" class="login" name=pass><br>
	<input type="submit" class="button" name=login value="Login">
	</form>
	</div>
</div>
</body>
</html>