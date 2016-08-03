<?php 
include "../modul/koneksi.php";
include "modul/ceklogin.php";
?>
<html>
<head>
<title>Panitia PSB SMK Komputer Abdi Bangsa</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">
<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>  
</head>
<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		Hallo, Admin<br>
		<a href="../index.php">Lihat website</a> |  <a href="logout.php">Keluar</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="index.php">Dashboard</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	</div>
	<div id="rightContent">
	<?php 
	@$menu="home"; 
if(isset($_GET['menu']))
{
$menu=$_GET['menu'];	
}
$file="$menu.php";
if(!file_exists("page/$file"))
{
include "page/404.html";	
}
else	
{
		include "page/$file";	
		}

	?>
	
	</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2012 MOS css template | <a href="#">SMK KOMPUTER ABDI Bangsa</a> | design <a href="http://arirusmanto.com" rel="nofollow" target="_blank">arirusmanto.com</a><br>
	redesign <a href="#">Ramdhan Rizki</a> 
</div>
</div>
</body>
</html>