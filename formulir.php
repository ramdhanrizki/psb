<?php 
session_start();
include "modul/koneksi.php";
if(!isset($_SESSION['SiswaNoPeserta']))
{
echo "<h1>Akses Ditolak!! anda belum login</h1>";    
exit();
}
$now=date("M d Y");
$siswa=mysql_query("select * from ppdb_data_siswa,ppdb_biodata where
        ppdb_data_siswa.no_peserta=ppdb_biodata.no_peserta and ppdb_data_siswa.no_peserta='$_SESSION[SiswaNoPeserta]'")or die(mysql_error());
$row=  mysql_fetch_array($siswa);
define ('FPDF_FONTPATH','plugin/fpdf/font/');
require 'plugin/fpdf/fpdf.php';
$jurusan1=mysql_fetch_array(mysql_query("select nama_jurusan from ppdb_jurusan where id_jurusan='$row[jurusan_1]'"))or die(mysql_error());
$jurusan2=mysql_fetch_array(mysql_query("select nama_jurusan from ppdb_jurusan where id_jurusan='$row[jurusan_2]'"));
class PDF extends FPDF{
    
    function header()
    {
        $this->Image('logo.jpg',1,0.59,2.7); 
        $this->SetTextColor(0,0,0);
        $this->SetFont('Arial','B','14');
        $this->Cell(20,1,'FORMULIR PENDAFTARAN',0,0,'C');
        $this->Ln(0.8);
        $this->SetFont('Arial','B','14');
        $this->Cell(20,1,'SMK KOMPUTER ABDI BANGSA',0,0,'C');
        $this->Ln(0.8);
        $this->SetFont('Arial','B','14');
        $this->Cell(20,1,'Tahun Pelajaran 2015 / 2016',0,0,'C');
        $this->Ln(0.8);
        
        }
		

    
}
$pdf = new PDF('P','cm',array(21.5,33));
$pdf->Open(); 
$pdf->AliasNbPages(); 
$pdf->SetTopMargin(0.3);
$pdf->SetAutoPageBreak("off" , 0);
$pdf->AddPage();
$pdf->Line(1, 1, 1,1);

$pdf->Ln(1);

$pdf->SetFont('Arial','','11');
$pdf->Cell(16,0.59,'No.Pendaftaran',0,0,'R');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[no_peserta]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'1. Nama Lengkap Calon Siswa',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[nama_lengkap]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'2. Jenis Kelamin',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[jenis_kelamin]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'3. Agama',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[agama_siswa]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'4. Tempat Lahir',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[tempat_lahir]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'5. Tanggal Lahir',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[tgl_lahir]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'   Alamat Lengkap',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->MultiCell(12,1,"$row[alamat_siswa]",0,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    No. Telp. Rumah/HP',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[telp_siswa]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'6. Asal Sekolah',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[asal_sekolah]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    Nomor STTB',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[nomor_sttb]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    Tahun STTB',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[tahun_sttb]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'7. Data Orang Tua / Wali',0,1,'L');


$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Nama Ayah',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[nama_ayah]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Agama',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[agama_ayah]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Pekerjaan',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[pekerjaan_ayah]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Pendapatan per bulan',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"Rp. $row[pendapatan_ayah]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Alamat Lengkap',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->MultiCell(12,1,"$row[alamat_ayah]",0,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Kode Pos',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[kode_pos_ayah]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *No. Telp Rumah / HP',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[telp_ayah]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Nama Ibu',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[nama_ibu]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Agama',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[agama_ibu]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Pekerjaan',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[pekerjaan_ibu]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Pendapatan per bulan',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"Rp. $row[pendapatan_ibu]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Alamat Lengkap',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->MultiCell(12,1,"$row[alamat_ibu]",0,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Kode Pos',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[kode_pos_ibu]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *No. Telp Rumah / HP',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[telp_ibu]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Nama Wali',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[nama_wali]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Agama',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[agama_wali]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Pekerjaan',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[pekerjaan_wali]",0,1,'L');


$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Alamat Lengkap',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->MultiCell(12,1,"$row[alamat_wali]",0,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *Kode Pos',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[kode_pos_wali]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'    *No. Telp Rumah / HP',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[telp_wali]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'8. Pilihan Jurusan 1',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$jurusan1[nama_jurusan]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'9. Pilihan Jurusan 2',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$jurusan2[nama_jurusan]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'10.Sumber Informasi',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->Cell(12,0.59,"$row[sumber_info]",0,1,'L');

$pdf->SetFont('Arial','','11');
$pdf->Cell(7,0.59,'11.Motivasi Masuk SMKK Abdi Bangsa',0,0,'L');
$pdf->Cell(0.3,0.59,':',0,0,'L');
$pdf->MultiCell(12,1,"$row[motivasi]",0,'L');

$pdf->SetFont('Arial','B','11');
$pdf->Cell(16.5,0.59,"Sukabumi, $now",0,1,'R');

$pdf->SetFont('Arial','B','11');
$pdf->Cell(9.5,0.59,'Mengetahui,',0,0,'C');
$pdf->Cell(9.5,0.59,'',0,1,'C');
$pdf->Cell(9.5,0.7,'Orang Tua / Wali',0,0,'C');
$pdf->Cell(9.5,0.7,'Calon Siswa',0,1,'C');

$pdf->Cell(9.5,2.4,'____________________',0,0,'C');
$pdf->Cell(9.5,2.4,'____________________',0,1,'C');



$pdf->Output();
?>