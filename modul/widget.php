<?php 
if(!isset($_SESSION['SiswaNoPeserta'])) {
?>

<div class="column login kolom" >
<div class=w_title><span class="glyphicon glyphicon-list"></span> Login Peserta</div>
                                    <form class="form-horizontal" role="form" action="" method="post">
						<div class="form-group">
							 <label for="nopendaftaran" class="col-sm-3 control-label">No.Peserta</label>
							<div class="col-sm-9">
								<input type="text" name="username" class="form-control" >
							</div>
						</div>
						<div class="form-group">
							 <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
							<div class="col-sm-9">
								<input type="password" name="password" class="form-control" id="inputPassword3">
							</div>
						</div>
						
						<div class="form-group">
							<div class=" col-sm-10">
								 <button type="submit" class="btn btn-success" name="login">Login</button>
							</div>
						</div>
					</form>
                                    
				</div>

<?php }else {
    ?>
    <div class="list-group kolom">
				<a href="#" class="list-group-item active"><span class="glyphicon glyphicon-list"></span> 
					Menu User</a>
			   <a href="main.php?page=biodata" class="list-group-item">Bioada Siswa</a>	
			   <a href="main.php?page=updatebiodata" class="list-group-item">Update Biodata</a>		
			   <a href="formulir.php" class="list-group-item" target="_blank">Cetak Forumulir Pendaftaran</a>
                           <a href="main.php?page=resetpassword" class="list-group-item">Ubah Password</a>				   
			   <a href="logout.php" class="list-group-item">Logout</a>	
			 		</div>
    
<?php } ?>
<div class="list-group kolom">
				<a href="#" class="list-group-item active"><span class="glyphicon glyphicon-list"></span> 
				Pengumuman</a>
			  
			  <a href="" class="list-group-item">Daftar Calon Peserta Didik</a>	
			  <a href="" class="list-group-item">Persyaratan Peserta Didik Baru</a>	
			  <a href="" class="list-group-item">Jadwal Pendaftaran Online</a>	
			  <a href="" class="list-group-item">Alur Pendaftaran Online</a>	
			  <a href="" class="list-group-item">Jadwal Tes Masuk Calon Peserta Didik Baru  </a>	
			 	

			  </div>