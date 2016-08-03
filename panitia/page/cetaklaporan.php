<?php 
include "../../modul/koneksi.php";
define ('FPDF_FONTPATH','../../plugin/fpdf/font/');
require '../../plugin/fpdf/fpdf.php';
switch($_GET['opsi'])
{
case "periode" :
 


class PDF extends FPDF{
function Header(){
 $this->Image('../../logo.jpg',1,0.59,2.7); 
        $this->SetTextColor(0,0,0);
        $this->SetFont('Arial','B','14');
        $this->Cell(27.7,1,'REKAPITULASI PENERIMAAN SISWA BARU',0,0,'C');
        $this->Ln(0.8);
        $this->SetFont('Arial','B','14');
        $this->Cell(28,1,'SMK KOMPUTER ABDI BANGSA',0,0,'C');
        $this->Ln(0.8);
        $this->SetFont('Arial','B','14');
        $this->Cell(28,1,'Tahun Pelajaran 2015 / 2016',0,0,'C');
        $this->Ln(2);
}
function Content()
	{
    $tgl1=$_GET['tgl1'];
$tgl2=$_GET['tgl2'];
    $siswa=mysql_query("select ppdb_biodata.*,ppdb_data_siswa.* from ppdb_biodata,ppdb_data_siswa where ppdb_data_siswa.no_peserta=ppdb_biodata.no_peserta  and ppdb_data_siswa.tgl_pendaftaran between '$tgl1' and '$tgl2' order by ppdb_data_siswa.no_peserta")or die(mysql_error());

       $no=1;

$this->Cell(12,1,'Laporan Tanggal : '.$tgl1.' s/d '.$tgl2,0,1,'L',0);
$this->SetFillColor(192,192,192);
$this->Cell(1,1,'No','LTRB',0,'C',1);
$this->Cell(3,1,'No Peserta','LTRB',0,'C',1);
$this->Cell(5,1,'Nama Lengkap','LTRB',0,'C',1);
$this->Cell(0.8,1,'Jk','LTRB',0,'C',1);
$this->Cell(5,1,'Asal Sekolah','LTRB',0,'C',1);
$this->Cell(4,1,'No Telpon','LTRB',0,'C',1);
$this->Cell(3,1,'Tgl Pendaftaran','LTRB',0,'C',1);
$this->Cell(2,1,'Jurusan 1','LTRB',0,'C',1);
$this->Cell(2,1,'Jurusan 2','LTRB',0,'C',1);
$this->Cell(2,1,'Konfirmasi','LTRB',1,'C',1);
while($row=mysql_fetch_array($siswa))
{
$this->Cell(1,1,$no,'LTRB',0,'C');
$this->Cell(3,1,$row['no_peserta'],'LTRBB',0,'L');
$this->Cell(5,1,$row['nama_lengkap'],'LTRBB',0,'L');
$this->Cell(0.8,1,$row['jenis_kelamin'],'LTRBB',0,'C');
$this->Cell(5,1,$row['asal_sekolah'],'LTRB',0,'L');
$this->Cell(4,1,$row['telp_siswa'],'LTRBB',0,'L');
$this->Cell(3,1,$row['tgl_pendaftaran'],'LTRBB',0,'C');
$this->Cell(2,1,$row['jurusan_1'],'LTRBB',0,'C');
$this->Cell(2,1,$row['jurusan_2'],'LTRBB',0,'C');
$this->Cell(2,1,$row['status_vertifikasi'],'LTRBB',1,'C');
$no++;
}
        
	}
function Footer()
	{
		
		$this->SetY(19);
		
		$this->Cell(0,1,'Laporan Rekapitulasi Penerimaan Siswa Baru SMK Komputer Abdi Bangsa',0,0,'L');
		$this->Cell(0,1,'Halaman '.$this->PageNo(),0,0,'R');
                
	}
        

        
        
}
$pdf=new PDF('L','cm','A4');
$pdf->SetFont('Arial','','8');
$pdf->Open();
$pdf->AddPage();
$pdf->Content();
$pdf->output();
break;

}

?>