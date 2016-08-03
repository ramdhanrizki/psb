<?php 
class database{
	
	function koneksi(){
	$user="root";
	$host="localhost";
	$pass="";
	$db="ppdb";
	mysql_connect("$host","$user","$pass");
	mysql_select_db("$db");
		
	}
	
	function jurusan(){
	$query=mysql_query("select * from jurusan") or die(mysql_error());
	
	while($r=mysql_fetch_array($query))
	{
		$data[]=$r;
	}
	return $data;	
		
	}
	
	
	function idcalonakhir()
	{
		$id=mysql_query("select max(id_calon) as akhir from calon");
		$idr=mysql_fetch_array($id);
		$akhir=substr($idr['akhir'],6,3)+1;
		$idcalon="AB1516".sprintf("%03s",$akhir);
		return $idcalon;
	}
	
	
	
}


?>