<?php 
$batas=10;
if(isset($_GET['hal']))
{
$hal=$_GET['hal'];
$posisi=($hal-1)*$batas;
}
else
{
$hal=1;
$posisi=0;
}
$siswa=mysql_query("select ppdb_biodata.no_peserta,nama_lengkap,jenis_kelamin,tgl_lahir,asal_sekolah from ppdb_biodata,ppdb_data_siswa where ppdb_data_siswa.no_peserta=ppdb_biodata.no_peserta order by no_peserta DESC limit $posisi,$batas")or die(mysql_error());

?>
<div class=post_judul>
<h2>Calon Peserta Didik Baru</h2>
</div>
<table class="table table-striped table-bordered table-hover" width="744">
<thead>
<tr>
<th>#</th>
<th>No Peserta</th>
<th>Nama Lengkap</th>
<th>JK</th>
<th>Tgl Lahir</th>
<th>Asal Sekolah</th>
</tr>
</thead>
<tbody>

<?php 
$no=1;
while($rsiswa=mysql_fetch_array($siswa))
{
echo "<tr><td>$no</td><td>$rsiswa[no_peserta]</td><td>$rsiswa[nama_lengkap]</td><td>$rsiswa[jenis_kelamin]</td>
<td>$rsiswa[tgl_lahir]</td><td>$rsiswa[asal_sekolah]</td></tr>";
$no++;
}
?>

</tbody>
</table>

<ul class="pagination">
	<?php 
	$j=mysql_num_rows(mysql_query("select * from ppdb_biodata,ppdb_data_siswa where ppdb_data_siswa.no_peserta=ppdb_biodata.no_peserta"));
	$jumlah=ceil($j/$batas);
	for($i=1;$i<=$jumlah;$i++)
	{
		if($jumlah>1)
		{
		if($hal==$jumlah)
		{
		echo "<li class=active><a href=#>$i</a></li>";
		}
		else{
		echo "<li><a href='?hal=$i'>$i</a></li>";
		}
		}
	}
	
	?>

</ul>