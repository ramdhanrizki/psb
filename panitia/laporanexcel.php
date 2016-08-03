<?php 
include "laporan/config.php";
include "laporan/PHPExcel.php";
include "../modul/koneksi.php";
@$mulai=$_GET['mulai'];
@$akhir=$_GET['akhir'];
date_default_timezone_set("Asia/Jakarta");
$excel=new PHPExcel();

$excel->getProperties()->setCreator("Ramdhan Rizki")
					   ->setLastModifiedBy("Ramdhan Rizki");

//Lebar kolom
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(5);
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(70);
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('J')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('K')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('L')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('M')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('N')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('O')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('P')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('R')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('S')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('T')->setWidth(15);

//MergeCell 
$excel->setActiveSheetIndex(0)->mergeCells('A1:T1');
$excel->getActiveSheet()->mergeCells('A2:T2');
$excel->setActiveSheetIndex(0)->mergeCells('A3:T3');
$excel->setActiveSheetIndex(0)->mergeCells('A4:T4');
$excel->setActiveSheetIndex(0)->mergeCells('A6:A7');
$excel->setActiveSheetIndex(0)->mergeCells('B6:B7');
$excel->setActiveSheetIndex(0)->mergeCells('C6:C7');
$excel->setActiveSheetIndex(0)->mergeCells('D6:D7');
$excel->setActiveSheetIndex(0)->mergeCells('E6:E7');
$excel->setActiveSheetIndex(0)->mergeCells('F6:F7');
$excel->setActiveSheetIndex(0)->mergeCells('G6:G7');
$excel->setActiveSheetIndex(0)->mergeCells('H6:K6');
$excel->setActiveSheetIndex(0)->mergeCells('L6:O6');
$excel->setActiveSheetIndex(0)->mergeCells('P6:S6');
$excel->setActiveSheetIndex(0)->mergeCells('T6:T7');


	
//Mengatur Style
$styleheader=new PHPExcel_Style();
$stylebody=new PHPExcel_Style();

$styleheader->applyFromArray(
	array('fill'=>array(
	'type'=>PHPExcel_Style_Fill::FILL_SOLID,
	'color'=>array('argb'=>'FFEEEEEE')),
	'borders'=>array(
				'bottom'=>array(
				    		'style'=>PHPExcel_Style_Border::BORDER_THIN),
				 'left'=>array(
						'style'=>PHPExcel_Style_Border::BORDER_THIN),
				 'right'=>array(
						'style'=>PHPExcel_Style_Border::BORDER_MEDIUM),
				 'top'=>array(
						'style'=>PHPExcel_Style_Border::BORDER_THIN)						
							)
	));
	

$stylebody->applyFromArray(
	array('fill' 	=> array(
		  'type'	=> PHPExcel_Style_Fill::FILL_SOLID,
		  'color'	=> array('argb' => 'FFFFFFFF')),
		  'borders' => array(
						'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
						'right'		=> array('style' => PHPExcel_Style_Border::BORDER_MEDIUM),
						'left'	    => array('style' => PHPExcel_Style_Border::BORDER_THIN),
						'top'	    => array('style' => PHPExcel_Style_Border::BORDER_THIN)
		  )
    ));
	
$excel->getActiveSheet()->setSharedStyle($styleheader, "A6:T7");
$excel->getActiveSheet()->setSharedStyle($stylebody, "A8:T30");
	
//Judul
$ju=$excel->setActiveSheetIndex(0);
$ju->setCellValue('A1','LAPORAN CALON PESERTA DIDIK BARU');
$ju->setCellValue('A2','TAHUN AJARAN 2015/2016');		
$ju->setCellValue('A3','SMK KOMPUTER ABDI BANGSA');					   

$ju->setCellValue('A6','No');					   
$ju->setCellValue('B6','Nama');					   
$ju->setCellValue('C6','JK');					   
$ju->setCellValue('D6','Agama');					   
$ju->setCellValue('E6','Alamat');					   
$ju->setCellValue('F6','No.Telp');					   
$ju->setCellValue('G6','Asal Sekolah');					   
$ju->setCellValue('H6','Ayah');					   
$ju->setCellValue('H7','Nama');					   
$ju->setCellValue('I7','Pekerjaan');					   
$ju->setCellValue('J7','Alamat');					   
$ju->setCellValue('K7','No.Telp');

					   
$ju->setCellValue('L6','Ibu');					   
$ju->setCellValue('L7','Nama');					   
$ju->setCellValue('M7','Pekerjaan');					   
$ju->setCellValue('N7','Alamat');					   
$ju->setCellValue('O7','No.Telp');

$ju->setCellValue('P6','Wali');					   
$ju->setCellValue('P7','Nama');					   
$ju->setCellValue('Q7','Pekerjaan');					   
$ju->setCellValue('R7','Alamat');					   
$ju->setCellValue('S7','No.Telp');

$ju->setCellValue('T6','Vertifikasi');
// ISI CELL 
$tgl1=$_GET['tgl1'];
$tgl2=$_GET['tgl2'];
if(!isset($_GET['status']) or $_GET['status']=="semua")
{
    $tambah="";
}
else
{
    $tambah=" and status_vertifikasi='$_GET[status]'";
}
$siswa=mysql_query("select ppdb_biodata.*,ppdb_data_siswa.* from ppdb_biodata,
        ppdb_data_siswa where ppdb_data_siswa.no_peserta=ppdb_biodata.no_peserta 
        and ppdb_data_siswa.tgl_pendaftaran between '$tgl1' and '$tgl2' $tambah
        order by ppdb_data_siswa.no_peserta")or die(mysql_error());
       $no=1;
$jml=mysql_num_rows($siswa);
$i=8;
while($row=mysql_fetch_array($siswa))
{
   $ju->setCellValue("A$i",$no);
   $ju->setCellValue("B$i",$row['nama_lengkap']);
   $ju->setCellValue("C$i",$row['jenis_kelamin']);
   $ju->setCellValue("D$i",$row['agama_siswa']);
   $ju->setCellValue("E$i",$row['alamat_siswa']);
   $ju->setCellValue("F$i",$row['telp_siswa']);
   $ju->setCellValue("G$i",$row['asal_sekolah']);
   $ju->setCellValue("H$i",$row['nama_ayah']);
   $ju->setCellValue("I$i",$row['pekerjaan_ayah']);
   $ju->setCellValue("J$i",$row['alamat_ayah']);
   $ju->setCellValue("K$i",$row['telp_ayah']);
   $ju->setCellValue("L$i",$row['nama_ibu']);
   $ju->setCellValue("M$i",$row['pekerjaan_ibu']);
   $ju->setCellValue("N$i",$row['alamat_ibu']);
   $ju->setCellValue("O$i",$row['telp_ibu']);
   $ju->setCellValue("P$i",$row['nama_wali']);
   $ju->setCellValue("Q$i",$row['pekerjaan_wali']);
   $ju->setCellValue("R$i",$row['alamat_wali']);
   $ju->setCellValue("S$i",$row['telp_wali']);
   $ju->setCellValue("T$i",$row['status_vertifikasi']);
   $no++;  
   $i++;
}

   




//Akhir dari isi CELL
$excel->setActiveSheetIndex(0);

$excel->getActiveSheet()->getStyle('A1:T7')
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getActiveSheet()->getStyle('A6:T7')
	  ->getAlignment()
	  ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
	  ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="laporan penerimaan siswa baru 2015/2016.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>