<?php 
include "modul/cekuser.php";
$nopeserta=$_SESSION['SiswaNoPeserta'];
$siswa=mysql_query("select * from ppdb_data_siswa,ppdb_biodata where
        ppdb_data_siswa.no_peserta=ppdb_biodata.no_peserta and ppdb_data_siswa.no_peserta='$_SESSION[SiswaNoPeserta]'")or die(mysql_error());
$row=mysql_fetch_array($siswa);
?>
					<form method=post action=modul/database.php?modul=updatebio enctype=multipart/form-data  >
					<fieldset>
					<legend>Update Biodata Siswa</legend>
					
  <div class="form-group">
    <label for="nopeserta">Nomor Peserta</label>
    <input type="text" class="form-control" id="nomorpeserta" name="nomorpeserta" value="<?=$row['no_peserta'] ?>" readonly>
  </div>	
  <div class="form-group">
    <label for="namalengkap">Nama Lengkap Calon Siswa</label>
    <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan nama lengkap anda" value="<?=$row['nama_lengkap'] ?>">
  </div>
	  <div class="form-group">
	
    <label for="jeniskelamin">Jenis Kelamin</label>
	  <?php 
	  $jk=$row['jenis_kelamin'];
	  if($jk=="L"){
	  ?>
	   <div class="radio">
      <label><input type="radio" name="jeniskelamin" value="L" checked>Laki Laki</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="jeniskelamin" value="P">Perempuan</label>
    </div>
	  <?php
	  }
	  else
	  {
	  ?>
	   <div class="radio">
      <label><input type="radio" name="jeniskelamin" value="L">Laki Laki</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="jeniskelamin" value="P" checked>Perempuan</label>
    </div>
	  <?php
	  }
	  
	  ?>
   
	<div id=form-gruop>
	<label for=agamasiswa>Agama Anda</label>
	<input type=text name=agamasiswa id=agamaanda class=form-control placeholder="Masukkan agama anda" value="<?=$row['agama_siswa'] ?>">
	</div>
	<div class="form-group">
    <label for="tempatlahir">Tempat Lahir</label>
    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Masukkan tempat lahir anda" value="<?=$row['tempat_lahir'] ?>">
  </div>
  
  <div class="form-group">
    <label for="tanggallahir">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tgllahir" name="tgllahir" value="<?=$row['tgl_lahir'] ?>">
  </div>
  
  </div>
    <div class="form-group">
    <label for="alamatsiswa">Alamat Lengkap</label>
    <textarea class="form-control" id="alamatsiswa" name="alamatsiswa" ><?=$row['alamat_siswa'] ?></textarea>
  </div>
  <div class="form-group">
    <label for="kodepossiswa">Kode POS Anda</label>
    <input type="text" class="form-control" id="kodepossiswa" name="kodepossiswa" placeholder="Masukkan kode pos anda" value="<?=$row['kode_pos_siswa'] ?>">
  </div>
  <div class="form-group">
    <label for="foto">Foto Siswa</label>
    <input type="file" id="foto" name="foto">
    
  </div>
    <div class="form-group">
    <label for="email">Email Siswa</label>
    <input type="email" id="email" name="email" placeholder="Masukkan email anda" class=form-control value="<?=$row['email'] ?>">
    
  </div>

  <div class="form-group">
    <label for="telponsiswa">No. Telp. Rumah / HP</label>
    <input type="text" class="form-control" id="telponsiswa" name="telponsiswa" placeholder="Masukkan nomor telpon anda" value="<?=$row['telp_siswa'] ?>">
  </div>
  </fieldset>
  <fieldset>
  <legend>Data Asal Sekolah</legend>
  <div class="form-group">
    <label for="asalsekolah">Asal Sekolah</label>
    <input type="text" class="form-control" id="asalsekolah" name="asalsekolah" placeholder="Masukkan sekolah asal anda" value="<?=$row['asal_sekolah'] ?>">
  </div>
  
  <div class="form-group">
    <label for="nomorsttb">Nomor STTB Sekolah Asal</label>
    <input type="text" class="form-control" id="nosttp" name="nosttb" placeholder="Masukkan nomor STTB sekolah asal" value="<?=$row['nomor_sttb'] ?>">
  </div>
  
  <div class="form-group">
    <label for="tahunsttb">Tahun STTB Sekolah</label>
    <input type="text" class="form-control" id="tahunsttb" name="tahunsttb" placeholder="Masukkan tahun STTB sekolah asal" value="<?=$row['tahun_sttb'] ?>">
  </div>
</fieldset>
<fieldset>
<legend>Data Orang Tua / Wali</legend>
<div class="form-group">
<label for="namaayah">Nama Ayah</label>
<input type="text" class="form-control" id="namaayah" name="namaayah" placeholder="Masukkan nama ayah anda" value="<?=$row['nama_ayah'] ?>">
</div>
<div class="form-group">
<label for="agamayah">Agama </label>
<input type="text" class="form-control" id="agamaayah" name="agamaayah" placeholder="Masukkan agama ayah" value="<?=$row['agama_ayah'] ?>">
</div>
<div class="form-group">
<label for="pekerjaan">Pekerjaan</label>
<input type="text" class="form-control" id="pekerjaanayah" name="pekerjaanayah" placeholder="Masukkan pekerjaan ayah" value="<?=$row['pekerjaan_ayah'] ?>">
</div>
<div class="form-group">
<label for="pendapatanayah">Pendapatan per bulan</label>
<input type="text" class="form-control" id="pendapatanayah" name="pendapatanayah" placeholder="Masukkan pendapatan ayah per bulan" value="<?=$row['pendapatan_ayah'] ?>">
</div>
<div class="form-group">
<label for="alamatayah">Alamat Lengkap</label>
<textarea  class="form-control" id="alamatayah" name="alamatayah" ><?=$row['alamat_ayah'] ?></textarea>
</div>
<div class="form-group">
<label for="kodeposayah">Kode Pos</label>
<input type="text" class="form-control" id="kodeposayah" name="kodeposayah" placeholder="Masukkan kode pos ayah" value="<?=$row['kode_pos_ayah'] ?>">
</div>
<div class="form-group">
<label for="telponayah">Nomor Telp Rumah / HP</label>
<input type="text" class="form-control" id="telponayah" name="telponayah" placeholder="Masukkan nomor telpon ayah" value="<?=$row['telp_ayah'] ?>"> 
</div>



<div class="form-group">
<label for="namaibu">Nama ibu</label>
<input type="text" class="form-control" id="namaibu" name="namaibu" placeholder="Masukkan nama ibu anda" value="<?=$row['nama_ibu'] ?>">
</div>
<div class="form-group">
<label for="agamibu">Agama </label>
<input type="text" class="form-control" id="agamaibu" name="agamaibu" placeholder="Masukkan agama ibu" value="<?=$row['agama_ibu'] ?>">
</div>
<div class="form-group">
<label for="pekerjaan">Pekerjaan</label>
<input type="text" class="form-control" id="pekerjaanibu" name="pekerjaanibu" placeholder="Masukkan pekerjaan ibu" value="<?=$row['pekerjaan_ibu'] ?>">
</div>
<div class="form-group">
<label for="pendapatanibu">Pendapatan per bulan</label>
<input type="text" class="form-control" id="pendapatanibu" name="pendapatanibu" placeholder="Masukkan pendapatan ibu per bulan" value="<?=$row['pendapatan_ibu'] ?>">
</div>
<div class="form-group">
<label for="alamatibu">Alamat Lengkap</label>
<textarea  class="form-control" id="alamatibu" name="alamatibu" ><?=$row['alamat_ibu'] ?></textarea>
</div>
<div class="form-group">
<label for="kodeposibu">Kode Pos</label>
<input type="text" class="form-control" id="kodeposibu" name="kodeposibu" placeholder="Masukkan kode pos ibu" value="<?=$row['kode_pos_ibu'] ?>">
</div>
<div class="form-group">
<label for="telponibu">Nomor Telp Rumah / HP</label>
<input type="text" class="form-control" id="telponibu" name="telponibu" placeholder="Masukkan nomor telpon ibu" value="<?=$row['telp_ibu'] ?>">
</div>


<div class="form-group">
<label for="namawali">Nama wali</label>
<input type="text" class="form-control" id="namawali" name="namawali" placeholder="Masukkan nama wali anda" value="<?=$row['nama_wali'] ?>">
</div>
<div class="form-group">
<label for="agamawali">Agama </label>
<input type="text" class="form-control" id="agamawali" name="agamawali" placeholder="Masukkan agama wali" value="<?=$row['agama_wali'] ?>">
</div>
<div class="form-group">
<label for="pekerjaan">Pekerjaan</label>
<input type="text" class="form-control" id="pekerjaanwali" name="pekerjaanwali" placeholder="Masukkan pekerjaan wali" value="<?=$row['pekerjaan_wali'] ?>">
</div>

<div class="form-group">
<label for="alamatwali">Alamat Lengkap</label>
<textarea  class="form-control" id="alamatwali" name="alamatwali" ><?=$row['alamat_wali'] ?></textarea>
</div>
<div class="form-group">
<label for="kodeposwali">Kode Pos</label>
<input type="text" class="form-control" id="kodeposwali" name="kodeposwali" placeholder="Masukkan kode pos wali" value="<?=$row['kode_pos_wali'] ?>">
</div>
<div class="form-group">
<label for="telponwali">Nomor Telp Rumah / HP</label>
<input type="text" class="form-control" id="telponwali" name="telponwali" placeholder="Masukkan nomor telpon wali" value="<?=$row['telp_wali'] ?>">
</div>
</fieldset>  
<fieldset>
<legend>Pilihan Bidang Studi</legend>
<div class="form-group">
    <label for="jurusan1">Pilihan Jurusan Pertama</label>
    <select name=jurusan1 class=form-control>
	<option value="">Pilih Jurusan</option>
	<?php 
	$jr=mysql_query("select * from ppdb_jurusan") or die(mysql_error());
	while($rjr=mysql_fetch_array($jr))
	{
	if($row['jurusan_1']==$rjr['id_jurusan']){
	
	echo "<option value=$rjr[id_jurusan] selected>$rjr[nama_jurusan]</option>";
	}
	else
	{
	echo "<option value=$rjr[id_jurusan] >$rjr[nama_jurusan]</option>";
	}
	}
	
	?>
	</select>
    
  </div>
  <div class="form-group">
    <label for="jurusan2">Pilihan Jurusan kedua</label>
    <select name=jurusan2 class=form-control>
	<option value="" selected>Pilih Jurusan</option>
	<?php 
	$jr=mysql_query("select * from ppdb_jurusan");
	while($rjr=mysql_fetch_array($jr))
	{
	if($row['jurusan_2']==$rjr['id_jurusan'])
	{
	echo "<option value=$rjr[id_jurusan] selected>$rjr[nama_jurusan]</option>";
	}
	else{
	echo "<option value=$rjr[id_jurusan]>$rjr[nama_jurusan]</option>";
	}
	}
	
	?>
	</select>
    
  </div>
  <div class="form-group">
    <label for="sumber">Sumber Informasi</label>
    <input type=text name=sumber class=form-control value="<?=$row['sumber_info'] ?>">
    
  </div>
    <div class="form-group">
    <label for="motivasi">Motivasi Masuk SMK Komputer Abdi Bansa</label>
    <textarea name=motivasi class=form-control><?=$row['motivasi'] ?></textarea>
    
  </div>
</fieldset>
  
  
  <div class="checkbox">
    <label>
      <input type="checkbox" name=setuju> Saya setuju dengan peraturan yang ada dan data yang diisi adalah benar
    </label>
  </div>
  <button type="submit" class="btn btn-success btn-large">Update</button>
</form>


<script>
		addEventListener('load', prettyPrint, false);
		$(document).ready(function(){
		$('pre').addClass('prettyprint linenums');
			});
		</script> 
