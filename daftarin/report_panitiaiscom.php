<?php
include('koneksi_report.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('C2', 'Cetak Data Pendaftar Panitia ISCOM');
$sheet->setCellValue('A4', 'No');
$sheet->setCellValue('B4', 'Nama Lengkap');
$sheet->setCellValue('C4', 'NPM');
$sheet->setCellValue('D4', 'Angkatan');
$sheet->setCellValue('E4', 'Jenis Kelamin');
$sheet->setCellValue('F4', 'Domisili');
$sheet->setCellValue('G4', 'Email');
$sheet->setCellValue('H4', 'Line');
$sheet->setCellValue('I4', 'No WhatsApp');
$sheet->setCellValue('J4', 'Divisi 1');
$sheet->setCellValue('K4', 'Divisi 2');
$sheet->setCellValue('L4', 'Alasan memilih Divisi');
 
$query = mysqli_query($koneksi,"select * from panitia_iscom");
$i = 5;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama']);
	$sheet->setCellValue('C'.$i, $row['npm']);
	$sheet->setCellValue('D'.$i, $row['angkatan']);
	$sheet->setCellValue('E'.$i, $row['jenis_kelamin']);
	$sheet->setCellValue('F'.$i, $row['domisili']);
	$sheet->setCellValue('G'.$i, $row['email']);
	$sheet->setCellValue('H'.$i, $row['id_line']);
	$sheet->setCellValue('I'.$i, $row['wa']);
	$sheet->setCellValue('J'.$i, $row['divisi1']);
	$sheet->setCellValue('K'.$i, $row['divisi2']);
	$sheet->setCellValue('L'.$i, $row['alasan']);	
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
$writer->save('Report Pendaftar Panitia ISCOM.xlsx');
?>