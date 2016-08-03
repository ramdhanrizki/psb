<?php 
if(isset($_GET['page']))
{
if($_GET['page']=="daftar")
{
include "page/pendaftaran.php";
}
else if($_GET['page']=="biodata")
{
include "page/biodata.php";
}
else if($_GET['page']=="updatebiodata")
{
include "page/updatebiodata.php";
}
else if($_GET['page']=="daftarcalon")
{
include "page/daftarcalon.php";
}
else if($_GET['page']=="resetpassword")
{
include "page/ubahpassword.php";
}
}
else
{
include "page/home.php";
}
?>