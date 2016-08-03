<h3>Data Calon Peserta Didik Baru</h3>
				
					
					
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
$siswa=mysql_query("select ppdb_biodata.*,ppdb_data_siswa.* from ppdb_biodata,ppdb_data_siswa where ppdb_data_siswa.no_peserta=ppdb_biodata.no_peserta order by ppdb_data_siswa.no_peserta DESC limit $posisi,$batas")or die(mysql_error());

?>

<table class="data">
<thead>
			<tr class="data">


<th class=data>#</th>
<th class=data>No Peserta</th>
<th class=data>Nama Lengkap</th>
<th class=data>JK</th>
<th class=data>Tgl Lahir</th>
<th class=data>Asal Sekolah</th>
<th class=data>No Telp/Hp</th>
<th class=data>Vertifikasi</th>
<th class=data>Diterima</th>
<th class=data>Option</th>
</tr>

<tbody>

<?php 
$no=1;
while($rsiswa=mysql_fetch_array($siswa))
{
echo "<tr class=data><td class=data>$no</td><td class=data>$rsiswa[no_peserta]</td><td class=data>$rsiswa[nama_lengkap]</td><td class=data>$rsiswa[jenis_kelamin]</td>
<td class=data>$rsiswa[tgl_lahir]</td><td class=data>$rsiswa[asal_sekolah]</td><td class=data>$rsiswa[telp_siswa]</td>
<td class=data><a href=modul/database.php?aksi=ubahvertifikasi&id=$rsiswa[no_peserta] title='Klik untuk mengubah status vertivikasi'>$rsiswa[status_vertifikasi]</a></td><td class=data><a href=modul/database.php?aksi=ubahseleksi&id=$rsiswa[no_peserta] title='Klik untuk mengubah status Seleksi'>$rsiswa[status_seleksi]</a></td>
<td class=data>
<a href=index.php?menu=detailsiswa&id=$rsiswa[no_peserta]>Detail</a> 
<a href=index.php?menu=editsiswa&id=$rsiswa[no_peserta]>Edit</a> 
<a href=index.php?menu=hapussiswa&id=$rsiswa[no_peserta]>Hapus</a> 
</td>
</tr>";
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
						
						
					