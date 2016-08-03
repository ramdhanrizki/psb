<?php 
include "database.php";
$db=new database();
$db->koneksi();
$id=$db->idcalonakhir();
echo $id;


?>