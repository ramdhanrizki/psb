<?php 
include "include/database.php";
$db=new database();
$db->koneksi();
?>
<html>
<head>
<title>Pendaftaran Calon Siswa Baru</title>
<script>
function validasi(form){
if (form.username.value == ""){
    alert("Data belum lengkap");
    form.username.focus();
    return (false);
  }    
  if (form.email.value == ""){
    alert("Data belum lengkap");
    form.email.focus();
    return (false);
  }    
 
 if (form.password.value == ""){
    alert("Data belum lengkap");
    form.password.focus();
    return (false);
  }    
 
 if (form.password2.value == ""){
    alert("Data belum lengkap");
    form.password2.focus();
    return (false);
  }    
  if (form.password.value != form.password2.value){
    alert("Password yang anda masukkan tidak sama");
    form.password.focus();
    return (false);
  }    
 
 
 
return true;
}
</script>

</head>
<body>
    <h2>
        Pendataran Siswa Baru SMK Komputer Abdi Bangsa        
    </h2>
        
<form method=post action=simpandaftar.php onSubmit="return validasi(this)" enctype="multipart/form-data">
    <center><h4>Data Siswa</h4></center>
    <table>

        <tr>
<td>NISN</td>
<td>:</td>
<td><input type=text name=nisn></td>
</tr>

<tr>
<td>Nama Lengkap</td>
<td>:</td>
<td><input type=text name=nama></td>
</tr>

<tr>
<td>Tempat Lahir</td>
<td>:</td>
<td><input type=text name=tempat></td>
</tr>


<tr>
<td>Tanggal Lahir</td>
<td>:</td>
<td><input type=date name=tanggal></td>
</tr>

<tr>
<td>Agama</td>
<td>:</td>
<td><input type=text name=agama></td>
</tr>

<tr>
<td>Alamat</td>
<td>:</td>
<td><textarea name="alamat"></textarea></td>
</tr>

<tr>
<td>Tinggal Bersama</td>
<td>:</td>
        <td><select name="tinggal">
            <option value="Orang Tua">Orang Tua </option>
            <option value="Saudara">Saudara</option>
            <option value="Wali">Wali </option>
            <option value="Sendiri">Sendiri</option>
                
                
    </select></td>
</tr>

<tr>
<td>Berat Badan</td>
<td>:</td>
<td><input type=text name=berat></td>
</tr>

<tr>
<td>Tinggi Badan</td>
<td>:</td>
<td><input type=text name=tinggi></td>
</tr>

<tr>
<td>Golongan Darah</td>
<td>:</td>
<td>
	<input type=radio name=golongan value="A">A
	<input type=radio name=golongan value="B">B
	<input type=radio name=golongan value="O">O
	<input type=radio name=golongan value="AB">AB
	<input type=radio name=golongan value="Tidak Tahu">Tidak Tahu
	

</td>
</tr>

<tr>
<td>No Telpon/HP</td>
<td>:</td>
<td><input type=text name=siswa_telp></td>
</tr>

<tr>
<td>Pilihan Jurusan</td>
<td>:</td>
<td><select name=jurusan>
<?php 
$jurusan=$db->jurusan();
foreach($jurusan as $data)
{
	echo "<option value='$data[id_jurusan]'>$data[nama_jurusan]</option>";
	
}

?>
</select>
</td>
</tr>
<tr><td>Foto<td>
<td>:</td>
<td><input type="file" name="foto"></tr>

</table>

<h4>Data Sekolah</h4>
<hr>
<table>
<tr>
<td>Nama Sekolah</td>
<td>:</td>
<td><input type=text name=namasekolah></td>
</tr>

<tr>
<td>Alamat Sekolah</td>
<td>:</td>
<td><textarea name=alamatsekolah></textarea></td>
</tr>

<tr>
<td>No Telpon Sekolah</td>
<td>:</td>
<td><input type=text name=telpsekolah></td>
</tr>

</table>


<h4>Data Orang Tua</h4>
<hr>
<table>
<tr>
<td>Nama Ayah</td>
<td>:</td>
<td><input type=text name=namaayah></td>
</tr>

<tr>
<td>Nama Ibu</td>
<td>:</td>
<td><input type=text name=namaibu></td>
</tr>

<tr>
<td>Alamat Orang Tua</td>
<td>:</td>
<td><input type=text name=alamatortu></td>
</tr>

<tr>
<td>Pekerjaan Ayah</td>
<td>:</td>
<td><input type=text name=pekerjaanayah></td>
</tr>

<tr>
<td>Pekerjaan Ibu</td>
<td>:</td>
<td><input type=text name=pekerjaanibu></td>
</tr>
<tr>


<tr>
<td>Telpon Orang Tua</td>
<td>:</td>
<td><input type=text name=telportu></td>
</tr>


<td><input type=submit name=sb value=Daftar></td>
</tr>
</table>




</form>


</body>


</html>