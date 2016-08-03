<?php 
include "koneksi.php";
switch($_GET['modul'])
{
case "updatebio" : 
include "fungsi.php";
$sekarang=date('Y-m-d');
$nama_lengkap=anti_sql_injection($_POST['namalengkap']);
$nopeserta=anti_sql_injection($_POST['nomorpeserta']);
$jeniskelamin=anti_sql_injection($_POST['jeniskelamin']);
$tempatlahir=anti_sql_injection($_POST['tempatlahir']);
$agamasiswa=anti_sql_injection($_POST['agamasiswa']);
$tgllahir=anti_sql_injection($_POST['tgllahir']);
$alamatsiswa=anti_sql_injection($_POST['alamatsiswa']);
$kodepossiswa=anti_sql_injection($_POST['kodepossiswa']);
$email=anti_sql_injection($_POST['email']);
$foto_lokasi=$_FILES['foto']['tmp_name'];
$foto=$_FILES['foto']['name'];
$foto_nama=$nopeserta."_".$_FILES['foto']['name'];
$target="../foto/$foto_nama";

$telponsiswa=anti_sql_injection($_POST['telponsiswa']);
$asalsekolah=anti_sql_injection($_POST['asalsekolah']);
$nosttb=anti_sql_injection($_POST['nosttb']);
$tahunsttb=anti_sql_injection($_POST['tahunsttb']);
$namaayah=anti_sql_injection($_POST['namaayah']);
$agamaayah=anti_sql_injection($_POST['agamaayah']);
$pekerjaanayah=anti_sql_injection($_POST['pekerjaanayah']);
$pendapatanayah=anti_sql_injection($_POST['pendapatanayah']);
$alamatayah=anti_sql_injection($_POST['alamatayah']);
$kodeposayah=anti_sql_injection($_POST['kodeposayah']);
$telponayah=anti_sql_injection($_POST['telponayah']);
$namaibu=anti_sql_injection($_POST['namaibu']);
$agamaibu=anti_sql_injection($_POST['agamaibu']);
$pekerjaanibu=anti_sql_injection($_POST['pekerjaanibu']);
$pendapatanibu=anti_sql_injection($_POST['pendapatanibu']);
$alamatibu=anti_sql_injection($_POST['alamatibu']);
$kodeposibu=anti_sql_injection($_POST['kodeposibu']);
$telponibu=anti_sql_injection($_POST['telponibu']);
$namawali=anti_sql_injection($_POST['namawali']);
$agamawali=anti_sql_injection($_POST['agamawali']);
$pekerjaanwali=anti_sql_injection($_POST['pekerjaanwali']);
$alamatwali=anti_sql_injection($_POST['alamatwali']);
$kodeposwali=anti_sql_injection($_POST['kodeposwali']);
$telponwali=anti_sql_injection($_POST['telponwali']);
$jurusan1=anti_sql_injection($_POST['jurusan1']);
$jurusan2=anti_sql_injection($_POST['jurusan2']);
$sumber=anti_sql_injection($_POST['sumber']);
$motivasi=anti_sql_injection($_POST['motivasi']);
$setuju=anti_sql_injection($_POST['setuju']);

if(!empty($foto_lokasi))
{
move_uploaded_file($foto_lokasi,$target);
$q=mysql_query("update ppdb_data_siswa set email='$email',jurusan_1='$jurusan1',jurusan_2='$jurusan2',sumber_info='$sumber',
motivasi='$motivasi' where no_peserta='$nopeserta'");
$q2=mysql_query("update ppdb_biodata set nama_lengkap='$namalengkap',jenis_kelamin='$jeniskelamin',agama_siswa='$agamasiswa',
tempat_lahir='$tempatlahir',tgl_lahir='$tgllahir',alamat_siswa='$alamatsiswa',kode_pos_siswa='$kodepossiswa',telp_siswa='$telponsiswa',asal_sekolah='$asalsekolah',nomor_sttb='$nosttb',tahun_sttb='$tahunsttb',foto='$foto_nama',nama_ayah='$namaayah',agama_ayah='$agamaayah',pekerjaan_ayah='$pekerjaanayah',
pendapatan_ayah='$pendapatanayah',alamat_ayah='$alamatayah',kode_pos_ayah='$kodeposayah',telp_ayah='$telponayah',nama_ibu='$namaibu',agama_ibu='$agamaibu',pekerjaan_ibu='$pekerjaanibu',
pendapatan_ibu='$pendapatanibu',alamat_ibu='$alamatibu',kode_pos_ibu='$kodeposibu',telp_ibu='$telponibu',nama_wali='$namawali',agama_wali='$agamawali',pekerjaan_wali='$pekerjaanwali',alamat_wali='$alamatwali',kode_pos_wali='$kodeposwali',telp_wali='$telponwali' where no_peserta='$nopeserta'");

}
else
{
$q=mysql_query("update ppdb_data_siswa set email='$email',jurusan_1='$jurusan1',jurusan_2='$jurusan2',sumber_info='$sumber',
motivasi='$motivasi' where no_peserta='$nopeserta'");
$q2=mysql_query("update ppdb_biodata set nama_lengkap='$nama_lengkap',jenis_kelamin='$jeniskelamin',agama_siswa='$agamasiswa',
tempat_lahir='$tempatlahir',tgl_lahir='$tgllahir',alamat_siswa='$alamatsiswa',kode_pos_siswa='$kodepossiswa',telp_siswa='$telponsiswa',asal_sekolah='$asalsekolah',nomor_sttb='$nosttb',tahun_sttb='$tahunsttb',nama_ayah='$namaayah',agama_ayah='$agamaayah',pekerjaan_ayah='$pekerjaanayah',
pendapatan_ayah='$pendapatanayah',alamat_ayah='$alamatayah',kode_pos_ayah='$kodeposayah',telp_ayah='$telponayah',nama_ibu='$namaibu',agama_ibu='$agamaibu',pekerjaan_ibu='$pekerjaanibu',
pendapatan_ibu='$pendapatanibu',alamat_ibu='$alamatibu',kode_pos_ibu='$kodeposibu',telp_ibu='$telponibu',nama_wali='$namawali',agama_wali='$agamawali',pekerjaan_wali='$pekerjaanwali',alamat_wali='$alamatwali',kode_pos_wali='$kodeposwali',telp_wali='$telponwali' where no_peserta='$nopeserta'");

}
header("location:../index.php");

break;
}

?>