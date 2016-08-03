<?php 
$nopeserta=$_GET['id'];
$siswa=mysql_query("select * from ppdb_data_siswa,ppdb_biodata where
        ppdb_data_siswa.no_peserta=ppdb_biodata.no_peserta and ppdb_data_siswa.no_peserta='$nopeserta'")or die(mysql_error());
$row=mysql_fetch_array($siswa);
?>

						<h3>Edit Siswa</h3>




				<form method=post action=modul/database.php?aksi=updatesiswa enctype=multipart/form-data  >
					
					<table width="95%">
			<tr><td width="125px"><b>Nomor Peserta</b></td><td><input type="text" class="pendek" id="nomorpeserta" name="nomorpeserta" value="<?=$row['no_peserta'] ?>" readonly></td></tr>
			<tr><td><b>Nama Lengkap</b></td><td><input type="text" class="panjang" id="namalengkap" name="namalengkap" placeholder="Masukkan nama lengkap anda" value="<?=$row['nama_lengkap'] ?>"></td></tr>
				<tr><td><b>Jenis Kelamin</b></td><td>
			<?php 
	  $jk=$row['jenis_kelamin'];
	  if($jk=="L"){
	  ?>
				<input type="radio" name="jeniskelamin" value="L" checked>Laki Laki
				<input type="radio" name="jeniskelamin" value="P" >Perempuan
				<?php  
				}else
				{
				?>
				<input type="radio" name="jeniskelamin" value="L" >Laki Laki
				<input type="radio" name="jeniskelamin" value="P" checked>Perempuan
				<?php
				}
				?>
			</td></tr>
			<tr><td><b>Agama</b></td><td><input type="text" class="sedang" id="agamasiswa" name="agamasiswa" placeholder="Masukkan agama anda" value="<?=$row['agama_siswa'] ?>"></td></tr>
			<tr><td><b>Tempat Lahir</b></td><td><input type="text" class="sedang" id="tempatlahir" name="tempatlahir" placeholder="Masukkan tempat lahir anda" value="<?=$row['tempat_lahir'] ?>"></td></tr>
			<tr><td><b>Tanggal Lahir</b></td><td><input type="date" class="sedang" id="tgllahir" name="tgllahir"  value="<?=$row['tgl_lahir'] ?>"></td></tr>
			<tr><td><b>Alamat Lengkap</b></td><td><textarea class="alamatsiswa" id="alamatsiswa" name="alamatsiswa"><?=$row['alamat_siswa'] ?></textarea></td></tr>
			<tr><td><b>Kode Pos Siswa</b></td><td><input type="text" class="pendek" id="kodeposiswa" name="kodeposiswa" placeholder="Masukkan kodepos anda" value="<?=$row['kode_pos_siswa'] ?>"></td></tr>
			<tr><td><b>Foto Siswa</b></td><td> <input type="file" id="foto" name="foto"></td></tr>
			<tr><td><b>Email Siswa</b></td><td><input type="email" class="panjang" id="email" name="email" placeholder="Masukkan email anda" value="<?=$row['email'] ?>"></td></tr>
			<tr><td><b>No. Telp. Rumah / HP</b></td><td><input type="text" class="sedang" id="telponsiswa" name="telponsiswa" placeholder="Masukkan nomor telpon anda" value="<?=$row['telp_siswa'] ?>"></td></tr>
			
			
			<tr><td><b>Asal Sekolah </b></td><td><input type="text" class="panjang" id="asalsekolah" name="asalsekolah" placeholder="Masukkan asal sekolah" value="<?=$row['asal_sekolah'] ?>"></td></tr>
			<tr><td><b>Nomor STTb Sekolah Asal </b></td><td><input type="text" class="sedang" id="nosttb" name="nosttb" placeholder="Masukkan nomor STTB sekolah asal" value="<?=$row['nomor_sttb'] ?>"></td></tr>
			<tr><td><b>Tahun STTB Sekolah </b></td><td><input type="text" class="pendek" id="tahunsttb" name="tahunsttb" placeholder="Masukkan tahun STTB sekolah asal" value="<?=$row['tahun_sttb'] ?>"></td></tr>
			
			<tr><td><b>Nama Ayah </b></td><td><input type="text" class="panjang" id="namaayah" name="namaayah" placeholder="Masukkan nama ayah anda" value="<?=$row['nama_ayah'] ?>"></td></tr>
			<tr><td><b>Agama </b></td><td><input type="text" class="sedang" id="agamaayah" name="agamaayah" placeholder="Masukkan agamaayah ayah anda" value="<?=$row['agama_ayah'] ?>"></td></tr>
			<tr><td><b>Pekerjaan </b></td><td><input type="text" class="sedang" id="pekerjaanayah" name="pekerjaanayah" placeholder="Masukkan pekerjaa ayah anda" value="<?=$row['pekerjaan_ayah'] ?>"></td></tr>
			<tr><td><b>Pendapatan Per Bulan </b></td><td><input type="text" class="sedang" id="pendapatanayah" name="pendapatanayah" placeholder="Masukkan pendapatan ayah per bulan" value="<?=$row['pendapatan_ayah'] ?>"></td></tr>
			<tr><td><b>Alamat Ayah</b></td><td><textarea  id="alamatayah" name="alamatayah" ><?=$row['alamat_ayah'] ?></textarea></td></tr>
			<tr><td><b>Kode Pos </b></td><td><input type="text" class="sedang" id="kodeposayah" name="kodeposayah" placeholder="Masukkan kode pos ayah" value="<?=$row['kode_pos_ayah'] ?>"></td></tr>
			<tr><td><b>Nomor Telp Rumah / HP </b></td><td><input type="text" class="sedang" id="telponayah" name="telponayah" placeholder="Masukkan nomor telpon ayah" value="<?=$row['telp_ayah'] ?>"></td></tr>
			
			<tr><td><b>Nama Ibu </b></td><td><input type="text" class="panjang" id="namaibu" name="namaibu" placeholder="Masukkan nama ibu anda" value="<?=$row['nama_ibu'] ?>"></td></tr>
			<tr><td><b>Agama </b></td><td><input type="text" class="sedang" id="agamaibu" name="agamaibu" placeholder="Masukkan agamaibu ibu anda" value="<?=$row['agama_ibu'] ?>"></td></tr>
			<tr><td><b>Pekerjaan </b></td><td><input type="text" class="sedang" id="pekerjaanibu" name="pekerjaanibu" placeholder="Masukkan pekerjaa ibu anda" value="<?=$row['pekerjaan_ibu'] ?>"></td></tr>
			<tr><td><b>Pendapatan Per Bulan </b></td><td><input type="text" class="sedang" id="pendapatanibu" name="pendapatanibu" placeholder="Masukkan pendapatan ibu per bulan" value="<?=$row['pendapatan_ibu'] ?>"></td></tr>
			<tr><td><b>Alamat Ibu</b></td><td><textarea  id="alamatibu" name="alamatibu" ><?=$row['alamat_ibu'] ?></textarea></td></tr>
			<tr><td><b>Kode Pos </b></td><td><input type="text" class="sedang" id="kodeposibu" name="kodeposibu" placeholder="Masukkan kode pos ibu" value="<?=$row['kode_pos_ibu'] ?>"></td></tr>
			<tr><td><b>Nomor Telp Rumah / HP </b></td><td><input type="text" class="sedang" id="telponibu" name="telponibu" placeholder="Masukkan nomor telpon ibu" value="<?=$row['telp_ibu'] ?>"></td></tr>
			
			<tr><td><b>Nama wali </b></td><td><input type="text" class="panjang" id="namawali" name="namawali" placeholder="Masukkan nama wali anda" value="<?=$row['nama_wali'] ?>"></td></tr>
			<tr><td><b>Agama </b></td><td><input type="text" class="sedang" id="agamawali" name="agamawali" placeholder="Masukkan agamawali wali anda" value="<?=$row['agama_wali'] ?>"></td></tr>
			<tr><td><b>Pekerjaan </b></td><td><input type="text" class="sedang" id="pekerjaanwali" name="pekerjaanwali" placeholder="Masukkan pekerjaa wali anda" value="<?=$row['pekerjaan_wali'] ?>"></td></tr>
			
			<tr><td><b>Alamat wali</b></td><td><textarea  id="alamatwali" name="alamatwali" ><?=$row['alamat_wali'] ?></textarea></td></tr>
			<tr><td><b>Kode Pos </b></td><td><input type="text" class="sedang" id="kodeposwali" name="kodeposwali" placeholder="Masukkan kode pos wali" value="<?=$row['kode_pos_wali'] ?>"></td></tr>
			<tr><td><b>Nomor Telp Rumah / HP </b></td><td><input type="text" class="sedang" id="telponwali" name="telponwali" placeholder="Masukkan nomor telpon wali" value="<?=$row['telp_wali'] ?>"></td></tr>
			
			<tr><td><b>Pilihan Jurusan Pertama </b></td><td><select name=jurusan1 class=form-control>
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
	</select></td></tr>
			<tr><td><b>Pilihan Jurusan Kedua </b></td><td><select name=jurusan2 class=form-control>
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
	</select></td></tr>
	<tr><td><b>Sumber Informasi </b></td><td><input type="text" class="sedang" id="sumber" name="sumber" value="<?=$row['sumber_info'] ?>"></td></tr>
<tr><td><b>Motivasi</b></td><td><textarea name=motivasi ><?=$row['motivasi'] ?></textarea></td></tr>	
	<tr><td></td><td><input type="submit" class="button" value="Update"></td></tr>		
			
			
		</table>
	





</form>


	
						
						












