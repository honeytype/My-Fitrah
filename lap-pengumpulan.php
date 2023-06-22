<?php
require 'vendor/autoload.php';
require 'pengumpulan.php';

use Dompdf\Dompdf;

// Buat instance DOMPDF
$dompdf = new Dompdf();

$html =
    '<!-- Begin Page Content -->
<div class="container-fluid">
    <style>
        .header {
            border-bottom: 3px solid black;
        }
    </style>

    <!-- Page Heading -->
    <!DOCTYPE html>
<html>
<head>
    <title>Laporan Hasil Pendistribusian Zakat Fitrah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            font-weight: bold;
        }

        .font-bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="header">
        LAPORAN HASIL PENGUMPULAN ZAKAT FITRAH<br>
        MASJID BAITURRAHIM JATISAR KEDUNGREJA CILACAP<br>
        1 SYAWAL 1444 H/TH 2023s M
    </div>

    <table id="zero_config">
        <thead>
            <tr>
                <th style="width: 30%;">Total Muzakki</th>
                <th style="width: 30%;">Total Jiwa</th>
                <th style="width: 25%;">Total Sudah Zakat</th>
                <th style="width: 20%;">Total Uang</th>
                <th style="width: 25%;">Total Beras</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><span class="font-bold">' . $total . '</span></td>
                <td><span class="font-bold">' . $muzakki['total_muzakki'] . '</span></td>
                <td><a href="javascript:void(0)" style="text-decoration: none; color:black;">' . $sudah . '</a></td>
                <td>' . $uang . '</td>
                <td>' . $beras . ' Kg</td>
            </tr>
        </tbody>
    </table>
    
    <div style="display: flex; justify-content: space-between;">
        <!-- Tanda Tangan Ketua Panitia -->
        <div style="text-align: right; margin-top: 20px;">
        <br>
            <br>
            <br>
            <br>
            <br>
            <br>    
        <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>Ketua Panitia Zakat Fitrah</p>
            <p>1 Syawal 1444H/Th.2023 M</p>
            <br>
            <br>
            <br>
            <p style="width: 200px; border-top: 1px solid black;" style="text-align: right; margin-top: 20px;" >Muhammad Radifan Hirzi</p>
        </div>
    </div>
</body>
</html>
';
// Mengambil HTML yang akan diubah menjadi PDF
$dompdf->loadHtml($html);

// Mengatur ukuran dan orientasi halaman
$dompdf->setPaper('A4', 'portrait');

// Merender HTML ke PDF
$dompdf->render();

// Mengirim output PDF ke browser
$dompdf->stream("cetak_pengumpulan.pdf", array("Attachment" => false));

exit(0);
