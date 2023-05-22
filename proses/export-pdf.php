<?php
// Include the PhpSpreadsheet library
require __DIR__ . '/../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Tcpdf;

// Create a new Spreadsheet object
$spreadsheet = new Spreadsheet();

// Add a new worksheet
$worksheet = $spreadsheet->getActiveSheet();

// Set the column headers
$worksheet->setCellValue('A1', 'No.')
    ->setCellValue('B1', 'ID Pembiayaan')
    ->setCellValue('C1', 'Nama Pembiayaan')
    ->setCellValue('D1', 'Jumlah Bulan')
    ->setCellValue('E1', 'Total Biaya')
    ->setCellValue('F1', 'Biaya Perbulan');

// Fetch the data from the database
include('../koneksi.php');
$query = "SELECT * FROM tb_sewa ORDER BY id_pembiayaan DESC";
$dat = mysqli_query($db, $query);

$nomor = 2;

while ($result = mysqli_fetch_array($dat)) {
    $worksheet->setCellValue('A' . $nomor, $nomor - 1)
        ->setCellValue('B' . $nomor, $result['id_pembiayaan'])
        ->setCellValue('C' . $nomor, $result['nama_pembiayaan'])
        ->setCellValue('D' . $nomor, $result['jumlah_bulan'])
        ->setCellValue('E' . $nomor, $result['total_biaya'])
        ->setCellValue('F' . $nomor, $result['biaya_perbulan']);

    $nomor++;
}

// Create a new TCPDF writer
$writer = new Tcpdf($spreadsheet);

// Set TCPDF properties
$writer->setCreator('Your Name')
    ->setAuthor('Your Name')
    ->setTitle('Data Pembiayaan')
    ->setSubject('Data Pembiayaan')
    ->setKeywords('data, pembiayaan');

// Save the spreadsheet to PDF
$writer->save('data_pembiayaan.pdf');