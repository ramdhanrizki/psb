
<div class="row">
	      	
	      	<div class="span12">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-pushpin"></i>
						<h3>Data Pesan</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						<?php 
$batas=10;
if(isset($_GET['hal']))
{
$hal=$_GET['hal'];
$posisi=($hal-1)*$batas;
}
else
{
$hal=1;
$posisi=0;
}
$pesan=mysql_query("select * from ppdb_pesan")or die(mysql_error());
if(mysql_num_rows($pesan)==0)
{
echo "<h4>Belum ada pesan</h4>";
}
else 
{
?>
<table class="table table-striped table-bordered table-hover"  ><tr><th width=20>No</th><th>Nama</th><th>Email</th><th>Tanggal</th><th>Isi</th><th>Balas</th></tr>
<?php
$no=1;

while($row=mysql_fetch_array($pesan)){
echo "<tr><td>$no</td><td>$row[nama]</td><td>$row[email]</td><td>$row[tgl_pesan]</td><td>$row[isi_pesan]</td></tr>";
}

?>
</table>
	<?php 

} ?>	
						
						
						</div> <!-- /widget content -->	
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /spa12 -->
			</div><!-- /row -->