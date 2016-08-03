<?php 
include "koneksi.php";
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

if(move_uploaded_file($foto_lokasi,$target))
{
$sql1 =mysql_query( "INSERT INTO  psbabdibangsa.ppdb_data_siswa  (no_peserta,  email,  password,  tgl_pendaftaran,  jurusan_1,  jurusan_2,  sumber_info,  motivasi,  status_vertifikasi,  status_seleksi)values('$nopeserta','$email',md5('$nopeserta'),'$sekarang','$jurusan1','$jurusan2','$sumber','$motivasi','belum','belum')");

$sq2=mysql_query("INSERT INTO psbabdibangsa.ppdb_biodata (no_peserta,
        nama_lengkap, jenis_kelamin, agama_siswa, tempat_lahir, tgl_lahir,
        alamat_siswa, kode_pos_siswa, telp_siswa, asal_sekolah, nomor_sttb, 
        tahun_sttb, foto, nama_ayah, agama_ayah, pekerjaan_ayah, 
        pendapatan_ayah, alamat_ayah, kode_pos_ayah, telp_ayah, nama_ibu,
        agama_ibu, pekerjaan_ibu, pendapatan_ibu, alamat_ibu, kode_pos_ibu, 
        telp_ibu, nama_wali, agama_wali, pekerjaan_wali, alamat_wali, 
        kode_pos_wali, telp_wali)values('$nopeserta','$nama_lengkap',
        '$jeniskelamin','$agamasiswa','$tempatlahir','$tgllahir',
        '$alamatsiswa','$kodepossiswa','$telponsiswa','$asalsekolah',
        '$nosttb','$tahunsttb','$foto_nama','$namaayah','$agamaayah','$pekerjaanayah',
        '$pendapatanayah','$alamatayah','$kodeposayah','$telponayah','$namaibu',
        '$agamaibu','$pekerjaanibu','$pendapatanibu','$alamatibu','$kodeposibu',
        '$telponibu','$namawali','$agamawali','$pekerjaanwali','$alamatwali',
        '$kodeposwali','$telponwali')");
		
if($sq2)
{
include "../selesasi.php";
}
}


?>