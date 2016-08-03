<div class=post_judul>
<h2 class='title'>Ubah Password</h2>
</div>
<div id="post_isi">
    <div id="gagal" class="alert alert-danger" role="alert" style="display: none">Password Lama Tidak Sesuai</div> 
    <div id="sukses" class="alert alert-success" role="alert" style="display: none">Password berhasil diubah</div> 
    <form class="form-horizontal" role="form" action="" method="post" >
						<div class="form-group">
							 <label for="nopendaftaran" class="col-sm-2 control-label">No.Peserta</label>
							<div class="col-sm-5">
                                                            <input type="text" name="username" class="form-control" readonly value="<?=$_SESSION['SiswaNoPeserta'] ?>">
							</div>
						</div>
						<div class="form-group">
							 <label for="inputPassword3" class="col-sm-2 control-label">Password Lama</label>
							<div class="col-sm-5">
								<input type="password1" name="password1" class="form-control" id="inputPassword3">
							</div>
						</div>
						<div class="form-group">
							 <label for="inputPassword3" class="col-sm-2 control-label">Password Baru</label>
							<div class="col-sm-5">
								<input type="password2" name="password2" class="form-control" id="inputPassword3">
							</div>
						</div>
						<div class="form-group">
							<div class=" col-sm-10">
								 <button type="submit" class="btn btn-success" name="ubah">Ubah</button>
							</div>
						</div>
					</form>
    
</div>
<?php
if(isset($_POST['ubah']))
{
    $lama=md5($_POST['password1']);
    $baru=md5($_POST['password2']);
    $cekps=mysql_query("select * from ppdb_data_siswa where no_peserta='$_SESSION[SiswaNoPeserta]' and password='$lama'");
    $num=  mysql_num_rows($cekps);
    if($num==0)
    {
        ?>
<script> 
        $("#gagal").show();
        </script>
        <?php
    }
    else
    {
        $q=mysql_query("update ppdb_data_siswa set password='$baru',status_update='1' where no_peserta='$_SESSION[SiswaNoPeserta]'");
        if($q)
        {
            ?>
            <script> 
        $("#sukses").show();
        </script>
        <?php
         
        }
    }
    
}
?>