<?php 
session_start();
include "modul/koneksi.php";
include "modul/fungsi.php";

?>
<?php 
    if(isset($_POST['login']))
    {
        $user=  anti_sql_injection($_POST['username']);
        $pass= md5(anti_sql_injection($_POST['password']));
        $cek=mysql_query("select * from ppdb_data_siswa where no_peserta='$user' and password='$pass'");
        $num=  mysql_num_rows($cek);
        if($num==0)
        {
            echo "<script>alert('Username atau Password salah')</script>";
        }
        else
        {
            $_SESSION['SiswaNoPeserta']=$user; 
            header("location:main.php?page=biodata");
        }
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PPDB SMK Komputer Abdi Bangsa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">


  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>


</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-12 column">
					
                    <h3>
                    <img src="img/header.png" align=left>
						
					</h3>
				</div>
			</div>
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li >
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="main.php?page=informasi">Informasi</a>
						</li>
                        <li><a href="pendaftaran.html">Registrasi</a></li>
                        <li><a href="calonsiswa.html">Daftar Peserta</a></li>
                        <li><a href="pengumuman.html">Pengumuman</a></li>
						<!-- <li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengumuman<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="main.php?page=daftarcalon">Daftar Peserta</a>
								</li>
								<li>
									<a href="#">Pengumuman Kelulusan</a>
								</li>
								
							</ul>
						</li>
						-->
					</ul>
					
					
				</div>
				
			</nav>
			
			<div class="row clearfix">
				<div class="col-md-8 column">
					<div id=post>
                                            <?php
                                            if(isset($_SESSION['SiswaNoPeserta']))
                                            {
                                                $cek=mysql_query("select * from ppdb_data_siswa where no_peserta='$_SESSION[SiswaNoPeserta]'");
                                                $rcek=  mysql_fetch_array($cek);
                                                if($rcek['status_update']==0 and @$_GET['page']!="resetpassword")
                                                {
                                                   echo " <div class='alert alert-danger' role='alert'>Nampaknya anda belum mengubah password
                                                       .. segera ubah password untuk keamanan</div>"; 
                                                }
                                                
                                            }
                                            ?>
                    <?php 
					if(!isset($_GET['page']))
					{
					include "page/home.php";
					}
					else
					{
					$page=$_GET['page'];
					$file="page/$page.php";
					if(!file_exists($file))
					{
						include "404.html";
					}
					else{
					include "$file";
					}
					}

					?>
						
					

					</div>
				</div>
                            <div class="col-md-4" id="widget">
				<?php include "modul/widget.php"; ?>
                                
                                
                            `   </div>
			</div>
			<div class="row clearfix">
				<div class="col-md-6 column">
					
				</div>
				<div class="col-md-2 column">
				</div>
				<div class="col-md-4 column">
                                    
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
