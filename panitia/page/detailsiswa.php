<style>
table th{width:300px;text-align:left}
#foto{width=200px;height:100px;margin-right:50px;border:3px solid #eee}
</style>

						<h3>Detail Siswa</h3>
				
						<?php 

$siswa=mysql_query("select ppdb_biodata.*,ppdb_data_siswa.* from ppdb_biodata,ppdb_data_siswa where ppdb_data_siswa.no_peserta=ppdb_biodata.no_peserta and ppdb_data_siswa.no_peserta='$_GET[id]'")or die(mysql_error());
$row=mysql_fetch_array($siswa);
?>
<table >
<tr><th>Nama Lengkap</th><td>:  </td><td><?=$row['nama_lengkap'] ?></td></tr><img id=foto src="../foto/<?=$row['foto'] ?>"  align=right>
<tr><th>Jenis Kelamin</th><td>:</td><td><?=$row['jenis_kelamin'] ?></td></tr>
<tr><th>Agama</th><td>:</td><td><?=$row['agama_siswa'] ?></td></tr>
<tr><th>Tempat Lahir</th><td>:</td><td><?=$row['tempat_lahir'] ?></td></tr>
<tr><th>Tanggal Lahir</th><td>:</td><td><?=$row['tgl_lahir'] ?></td></tr>
<tr><th>Alamat</th><td>:</td><td><?=$row['alamat_siswa'] ?></td></tr>
<tr><th>No. Telp. Rumah / HP</th><td>:</td><td><?=$row['telp_siswa'] ?></td></tr>
<tr><th>Asal Sekolah</th><td>:</td><td><?=$row['asal_sekolah'] ?></td></tr>
<tr><th>Nama Ayah</th><td>:</td><td><?=$row['nama_ayah'] ?></td></tr>
<tr><th>Pekerjaan Ayah</th><td>:</td><td><?=$row['pekerjaan_ayah'] ?></td></tr>
<tr><th>Alamat Ayah</th><td>:</td><td><?=$row['alamat_ayah'] ?></td></tr>
<tr><th>No. Telp. Rumah / HP</th><td>:</td><td><?=$row['telp_ayah'] ?></td></tr>
<tr><th>Nama Ibu</th><td>:</td><td><?=$row['nama_ibu'] ?></td></tr>
<tr><th>Pekerjaan Ibu</th><td>:</td><td><?=$row['pekerjaan_ibu'] ?></td></tr>
<tr><th>Alamat Ibu</th><td>:</td><td><?=$row['alamat_ibu'] ?></td></tr>
<tr><th>No. Telp. Rumah / HP</th><td>:</td><td><?=$row['telp_ibu'] ?></td></tr>
<tr><th>Nama Wali</th><td>:</td><td><?=$row['nama_wali'] ?></td></tr>
<tr><th>Pekerjaan Wali</th><td>:</td><td><?=$row['pekerjaan_wali'] ?></td></tr>
<tr><th>Alamat Wali</th><td>:</td><td><?=$row['alamat_wali'] ?></td></tr>
<tr><th>No. Telp. Rumah / HP</th><td>:</td><td><?=$row['telp_wali'] ?></td></tr>
<tr><td><a href=cetakformulir.php?id=<?=$row['no_peserta']?> target="_blank"><input type=button class=button name=formulir value=cetakformulir></a></td></tr>
</table>
						
						
			