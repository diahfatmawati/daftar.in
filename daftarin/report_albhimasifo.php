<?php
include('koneksi_report.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('C2', 'Cetak Data Pendaftar Anggota Luar Biasa HIMASIFO');
$sheet->setCellValue('A4', 'No');
$sheet->setCellValue('B4', 'Nama Lengkap');
$sheet->setCellValue('C4', 'Nama Panggilan');
$sheet->setCellValue('D4', 'NPM');
$sheet->setCellValue('E4', 'Angkatan');
$sheet->setCellValue('F4', 'Jenis Kelamin');
$sheet->setCellValue('G4', 'Tempat Lahir');
$sheet->setCellValue('H4', 'Tanggal Lahir');
$sheet->setCellValue('I4', 'Domisili');
$sheet->setCellValue('J4', 'Alamat');
$sheet->setCellValue('K4', 'Agama');
$sheet->setCellValue('L4', 'Email');
$sheet->setCellValue('M4', 'Line');
$sheet->setCellValue('N4', 'No WhatsApp');
$sheet->setCellValue('O4', 'Keahlian');
$sheet->setCellValue('P4', 'Organisasi');
$sheet->setCellValue('Q4', 'Prestasi');
$sheet->setCellValue('R4', 'Departemen 1');
$sheet->setCellValue('S4', 'Departemen 2');
$sheet->setCellValue('T4', 'Alasan memilih Departemen');
$sheet->setCellValue('U4', 'Alasan mendaftar HIMA');
 
$query = mysqli_query($koneksi,"select * from anggota_hima");
$i = 5;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama_lengkap']);
	$sheet->setCellValue('C'.$i, $row['nama_panggilan']);
	$sheet->setCellValue('D'.$i, $row['npm']);
	$sheet->setCellValue('E'.$i, $row['angkatan']);
	$sheet->setCellValue('F'.$i, $row['jenis_kelamin']);
	$sheet->setCellValue('G'.$i, $row['tmp_lahir']);
	$sheet->setCellValue('H'.$i, $row['tgl_lahir']);
	$sheet->setCellValue('I'.$i, $row['domisili']);
	$sheet->setCellValue('J'.$i, $row['alamat_ktp']);
	$sheet->setCellValue('K'.$i, $row['agama']);
	$sheet->setCellValue('L'.$i, $row['email']);
	$sheet->setCellValue('M'.$i, $row['id_line']);
	$sheet->setCellValue('N'.$i, $row['wa']);
	$sheet->setCellValue('O'.$i, $row['passion']);
	$sheet->setCellValue('P'.$i, $row['organisasi']);
	$sheet->setCellValue('Q'.$i, $row['prestasi']);
	$sheet->setCellValue('R'.$i, $row['dept1']);
	$sheet->setCellValue('S'.$i, $row['dept2']);
	$sheet->setCellValue('T'.$i, $row['alasan_dept']);	
	$sheet->setCellValue('U'.$i, $row['alasan_hima']);		
	$i++;
}
 
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:AA'.$i)->applyFromArray($styleArray);
 
 
$writer = new Xlsx($spreadsheet);
$writer->save('Report Pendaftar Anggota Luar Biasa HIMASIFO.xlsx');
?>