<?php 
include "modul/cekuser.php";
$nopeserta=$_SESSION['SiswaNoPeserta'];
$siswa=mysql_query("select * from ppdb_data_siswa,ppdb_biodata where
        ppdb_data_siswa.no_peserta=ppdb_biodata.no_peserta and ppdb_data_siswa.no_peserta='$_SESSION[SiswaNoPeserta]'")or die(mysql_error());
$num=mysql_num_rows($siswa);
if($num==0)
{
echo "<script>alert('Sepertinya anda belum mengisi biodata dengan lengkap silahkan isi biodata');document.location.href='index.php'</script>";
exit();
}
$row=mysql_fetch_array($siswa);
?>
<div class=post_judul>
<h2 class='title'>Biodata Siswa</h2>
</div>
<div class="post_isi">
<table>
<tr><th>Nama Lengkap</th><td><?=$row['nama_lengkap'] ?></td><td><img src=""></td></tr>
<tr><th>Jenis Kelamin</th><td><?=$row['jenis_kelamin'] ?></td></tr>
<tr><th>Agama</th><td><?=$row['agama_siswa'] ?></td></tr>
<tr><th>Tempat Lahir</th><td><?=$row['tempat_lahir'] ?></td></tr>
<tr><th>Tanggal Lahir</th><td><?=$row['tgl_lahir'] ?></td></tr>
<tr><th>Alamat</th><td><?=$row['alamat_siswa'] ?></td></tr>
<tr><th>No. Telp. Rumah / HP</th><td><?=$row['telp_siswa'] ?></td></tr>
<tr><th>Asal Sekolah</th><td><?=$row['asal_sekolah'] ?></td></tr>
<tr><th>Nama Ayah</th><td><?=$row['nama_ayah'] ?></td></tr>
<tr><th>Pekerjaan Ayah</th><td><?=$row['pekerjaan_ayah'] ?></td></tr>
<tr><th>Alamat Ayah</th><td><?=$row['alamat_ayah'] ?></td></tr>
<tr><th>No. Telp. Rumah / HP</th><td><?=$row['telp_ayah'] ?></td></tr>
<tr><th>Nama Ibu</th><td><?=$row['nama_ibu'] ?></td></tr>
<tr><th>Pekerjaan Ibu</th><td><?=$row['pekerjaan_ibu'] ?></td></tr>
<tr><th>Alamat Ibu</th><td><?=$row['alamat_ibu'] ?></td></tr>
<tr><th>No. Telp. Rumah / HP</th><td><?=$row['telp_ibu'] ?></td></tr>
<tr><th>Nama Wali</th><td><?=$row['nama_wali'] ?></td></tr>
<tr><th>Pekerjaan Wali</th><td><?=$row['pekerjaan_wali'] ?></td></tr>
<tr><th>Alamat Wali</th><td><?=$row['alamat_wali'] ?></td></tr>
<tr><th>No. Telp. Rumah / HP</th><td><?=$row['telp_wali'] ?></td></tr>
<tr><td><button class="btn btn-success">Perbaharui</button></td></tr>
</table>
</div>