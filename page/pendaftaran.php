<?php 
$qp=mysql_query("select max(no_peserta)as akhir from ppdb_data_siswa");
$rp=mysql_fetch_array($qp);
$akhir=substr($rp['akhir'],9,3)+1;
$now=date("md");
$kode="PSB15".$now.sprintf("%03s",$akhir);
?>
					<form method=post action=modul/selesaipendaftaran.php enctype=multipart/form-data  >
					<fieldset>
					<legend>Data Siswa</legend>
					
  <div class="form-group">
    <label for="nopeserta">Nomor Peserta</label>
    <input type="text" class="form-control" id="nomorpeserta" name="nomorpeserta" value="<?=$kode ?>" readonly>
  </div>	
  <div class="form-group">
    <label for="namalengkap">Nama Lengkap Calon Siswa</label>
    <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan nama lengkap anda" required>
  </div>
	  <div class="form-group">
    <label for="jeniskelamin">Jenis Kelamin</label>
    <div class="radio">
      <label><input type="radio" name="jeniskelamin" value="L" selected>Laki Laki</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="jeniskelamin" value="P">Perempuan</label>
    </div>
	<div id=form-gruop>
	<label for=agamasiswa>Agama Anda</label>
	<input type=text name=agamasiswa id=agamaanda class=form-control placeholder="Masukkan agama anda" required>
	</div>
	<div class="form-group">
    <label for="tempatlahir">Tempat Lahir</label>
    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Masukkan tempat lahir anda" required>
  </div>
  
  <div class="form-group">
    <label for="tanggallahir">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tgllahir" name="tgllahir" required>
  </div>
  
  </div>
    <div class="form-group">
    <label for="alamatsiswa">Alamat Lengkap</label>
    <textarea class="form-control" id="alamatsiswa" name="alamatsiswa" required></textarea>
  </div>
  <div class="form-group">
    <label for="kodepossiswa">Kode POS Anda</label>
    <input type="text" class="form-control" id="kodepossiswa" name="kodepossiswa" placeholder="Masukkan kode pos anda" required>
  </div>
  <div class="form-group">
    <label for="foto">Foto Siswa</label>
    <input type="file" id="foto" name="foto" required>
    
  </div>
    <div class="form-group">
    <label for="email">Email Siswa</label>
    <input type="email" id="email" name="email" placeholder="Masukkan email anda" class=form-control required>
    
  </div>

  <div class="form-group">
    <label for="telponsiswa">No. Telp. Rumah / HP</label>
    <input type="text" class="form-control" id="telponsiswa" name="telponsiswa" placeholder="Masukkan nomor telpon anda" required>
  </div>
  </fieldset>
  <fieldset>
  <legend>Data Asal Sekolah</legend>
  <div class="form-group">
    <label for="asalsekolah">Asal Sekolah</label>
    <input type="text" class="form-control" id="asalsekolah" name="asalsekolah" placeholder="Masukkan sekolah asal anda" required>
  </div>
  
  <div class="form-group">
    <label for="nomorsttb">Nomor STTB Sekolah Asal</label>
    <input type="text" class="form-control" id="nosttp" name="nosttb" placeholder="Masukkan nomor STTB sekolah asal" required>
  </div>
  
  <div class="form-group">
    <label for="tahunsttb">Tahun STTB Sekolah</label>
    <input type="text" class="form-control" id="tahunsttb" name="tahunsttb" placeholder="Masukkan tahun STTB sekolah asal" required>
  </div>
</fieldset>
<fieldset>
<legend>Data Orang Tua / Wali</legend>
<div class="form-group">
<label for="namaayah">Nama Ayah</label>
<input type="text" class="form-control" id="namaayah" name="namaayah" placeholder="Masukkan nama ayah anda" required>
</div>
<div class="form-group">
<label for="agamayah">Agama </label>
<input type="text" class="form-control" id="agamaayah" name="agamaayah" placeholder="Masukkan agama ayah" required>
</div>
<div class="form-group">
<label for="pekerjaan">Pekerjaan</label>
<input type="text" class="form-control" id="pekerjaanayah" name="pekerjaanayah" placeholder="Masukkan pekerjaan ayah" required>
</div>
<div class="form-group">
<label for="pendapatanayah">Pendapatan per bulan</label>
<input type="text" class="form-control" id="pendapatanayah" name="pendapatanayah" placeholder="Masukkan pendapatan ayah per bulan" required>
</div>
<div class="form-group">
<label for="alamatayah">Alamat Lengkap</label>
<textarea  class="form-control" id="alamatayah" name="alamatayah" required></textarea>
</div>
<div class="form-group">
<label for="kodeposayah">Kode Pos</label>
<input type="text" class="form-control" id="kodeposayah" name="kodeposayah" placeholder="Masukkan kode pos ayah" required>
</div>
<div class="form-group">
<label for="telponayah">Nomor Telp Rumah / HP</label>
<input type="text" class="form-control" id="telponayah" name="telponayah" placeholder="Masukkan nomor telpon ayah" required>
</div>



<div class="form-group">
<label for="namaibu">Nama ibu</label>
<input type="text" class="form-control" id="namaibu" name="namaibu" placeholder="Masukkan nama ibu anda" required>
</div>
<div class="form-group">
<label for="agamibu">Agama </label>
<input type="text" class="form-control" id="agamaibu" name="agamaibu" placeholder="Masukkan agama ibu" required>
</div>
<div class="form-group">
<label for="pekerjaan">Pekerjaan</label>
<input type="text" class="form-control" id="pekerjaanibu" name="pekerjaanibu" placeholder="Masukkan pekerjaan ibu" required>
</div>
<div class="form-group">
<label for="pendapatanibu">Pendapatan per bulan</label>
<input type="text" class="form-control" id="pendapatanibu" name="pendapatanibu" placeholder="Masukkan pendapatan ibu per bulan" required>
</div>
<div class="form-group">
<label for="alamatibu">Alamat Lengkap</label>
<textarea  class="form-control" id="alamatibu" name="alamatibu" required></textarea>
</div>
<div class="form-group">
<label for="kodeposibu">Kode Pos</label>
<input type="text" class="form-control" id="kodeposibu" name="kodeposibu" placeholder="Masukkan kode pos ibu" required>
</div>
<div class="form-group">
<label for="telponibu">Nomor Telp Rumah / HP</label>
<input type="text" class="form-control" id="telponibu" name="telponibu" placeholder="Masukkan nomor telpon ibu" required>
</div>


<div class="form-group">
<label for="namawali">Nama wali</label>
<input type="text" class="form-control" id="namawali" name="namawali" placeholder="Masukkan nama wali anda" >
</div>
<div class="form-group">
<label for="agamawali">Agama </label>
<input type="text" class="form-control" id="agamawali" name="agamawali" placeholder="Masukkan agama wali" >
</div>
<div class="form-group">
<label for="pekerjaan">Pekerjaan</label>
<input type="text" class="form-control" id="pekerjaanwali" name="pekerjaanwali" placeholder="Masukkan pekerjaan wali" >
</div>

<div class="form-group">
<label for="alamatwali">Alamat Lengkap</label>
<textarea  class="form-control" id="alamatwali" name="alamatwali" ></textarea>
</div>
<div class="form-group">
<label for="kodeposwali">Kode Pos</label>
<input type="text" class="form-control" id="kodeposwali" name="kodeposwali" placeholder="Masukkan kode pos wali" >
</div>
<div class="form-group">
<label for="telponwali">Nomor Telp Rumah / HP</label>
<input type="text" class="form-control" id="telponwali" name="telponwali" placeholder="Masukkan nomor telpon wali" >
</div>
</fieldset>  
<fieldset>
<legend>Pilihan Bidang Studi</legend>
<div class="form-group">
    <label for="jurusan1">Pilihan Jurusan Pertama</label>
    <select name=jurusan1 class=form-control >
	<option value="" selected>Pilih Jurusan</option>
	<?php 
	$jr=mysql_query("select * from ppdb_jurusan");
	while($rjr=mysql_fetch_array($jr))
	{
	echo "<option value=$rjr[id_jurusan]>$rjr[nama_jurusan]</option>";
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
	echo "<option value=$rjr[id_jurusan]>$rjr[nama_jurusan]</option>";
	}
	
	?>
	</select>
    
  </div>
  <div class="form-group">
    <label for="sumber">Sumber Informasi</label>
    <input type=text name=sumber class=form-control>
    
  </div>
    <div class="form-group">
    <label for="motivasi">Motivasi Masuk SMK Komputer Abdi Bansa</label>
    <textarea name=motivasi class=form-control></textarea>
    
  </div>
</fieldset>
  
  
  <div class="checkbox">
    <label>
      <input type="checkbox" name=setuju required> Saya setuju dengan peraturan yang ada dan data yang diisi adalah benar
    </label>
  </div>
  <button type="submit" class="btn btn-success btn-large">Daftar</button>
</form>
