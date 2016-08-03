<script>
  $(function() {
    $("#datepicker").datepicker({
            dateFormat : "yy/mm/dd",
                changeMonth : true,
                changeYear : true
	});
	 $("#datepicker2").datepicker({
            dateFormat : "yy/mm/dd",
                changeMonth : true,
                changeYear : true
	});
  });
  </script>
<h3>Laporan PPDB SMK Komputer Abdi Bangsa</h3>
	
		
		<div class=isilaporan>
                    <form method=post action="">
<table>
<tr><td>Tanggal</td><td><input type=text name=tgl1 id=datepicker></td><td>s/d Tanggal</td><td><input type=text name=tgl2 id=datepicker2></td>
    <td>Status Konfirmasi</td><td>
        <select name="status">
            <option value="semua">Semua</option>
            <option value="sudah">Sudah</option>
            <option value="belum">Belum</option>
            <select> 
    </td>
<td><input type=submit name=tampil value=Tampilkan class=button></td>
</tr>
</table>
</form>
<table class=data>
<tr class=data>
<th class=data>No</th>
<th class=data>No Peserta</th>
<th class=data>Nama Lengkap</th>
<th class=data>JK</th>
<th class=data>Tgl Lahir</th>
<th class=data>Alamat</th>
<th class=data>No Telpon</th>
<th class=data>Asal Sekolah</th>
</tr>
<?php 
if(isset($_POST['tampil'])):
$tgl1=$_POST['tgl1'];
$tgl2=$_POST['tgl2'];
$status=$_POST['status'];
if($status=="semua")
{
$tambah="";   
$status="semua";
}
else if($status=="sudah")
{
    $tambah=" and status_vertifikasi='sudah'";
    $status="sudah";
}
else {
    $tambah=" and status_vertifikasi='belum'";
     $status="belum";
}
    $q=mysql_query("select ppdb_biodata.*,ppdb_data_siswa.* from ppdb_biodata,ppdb_data_siswa where ppdb_data_siswa.no_peserta=ppdb_biodata.no_peserta  and ppdb_data_siswa.tgl_pendaftaran between '$tgl1' and '$tgl2' $tambah order by ppdb_data_siswa.no_peserta")or die(mysql_error());

$c=mysql_num_rows($q);
if($c==0)
{
echo "<tr><td colspan=8><b>Data calon siswa tidak ada</b></td></tr>";
}
else
{
while($r=mysql_fetch_array($q))
{
?>
<tr>
<td class=data>No</td>
<td class=data><?=$r['no_peserta']?></td>
<td class=data><?=$r['nama_lengkap']?></td>
<td class=data><?=$r['jenis_kelamin']?></td>
<td class=data><?=$r['tgl_lahir']?></td>
<td class=data><?=$r['alamat_siswa']?></td>
<td class=data><?=$r['telp_siswa']?></td>
<td class=data><?=$r['asal_sekolah']?></td>
</tr>
<?php
}
?>
<a href="page/cetaklaporan.php?opsi=periode&tgl1=<?=$tgl1?>&tgl2=<?=$tgl2?>&status=<?=$status?>" target="_blank"><input type=button class=button value="Cetak PDF"></a>&nbsp;
<a href="laporanexcel.php?tgl1=<?=$tgl1?>&tgl2=<?=$tgl2?>&status=<?=$status?>"><input type=button class=button value="Cetak EXCEL"></a>
</table>
<?php
}
endif;
?>
</table>
		
		</div>