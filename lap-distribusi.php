<?php
require 'vendor/autoload.php';
require 'distribusi.php';


use Dompdf\Dompdf;


// Buat instance DOMPDF
$dompdf = new Dompdf();

$html = '<!-- Begin Page Content -->
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

            .table {
                border-collapse: collapse;
                width: 100%;
            }

            .table th,
            .table td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }

            .table th {
                font-weight: bold;
            }

            .font-bold {
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div class="header">
            LAPORAN HASIL PENDISTRIBUSIAN ZAKAT FITRAH<br>
            MASJID BAITURRAHIM JATISAR KEDUNGREJA CILACAP<br>
            1 SYAWAL 1444 H/TH 2023 M
        </div>

        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Kategori Mustahik</th>
                    <th>Hak Beras</th>
                    <th>Jumlah KK</th>
                    <th>Total Beras</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span class="font-bold">Fakir I</span></td>
                    <td><a href="javascript:void(0)" style="text-decoration: none; color:black;">' . $fakirI . '</a></td>
                    <td>' . $kkfakirI . '</td>
                    <td>' . $berasfakirI . ' Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Fakir II</span></td>
                    <td><a href="javascript:void(0)" style="text-decoration: none; color:black;">' . $fakirII . '</a></td>
                    <td>' . $kkfakirII . '</td>
                    <td>' . $berasfakirII . 'Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Miskin I</span></td>
                    <td><a href="javascript:void(0)" style="text-decoration: none; color:black;">' . $miskinI . '</a></td>
                    <td>' . $kkmiskinI . '</td>
                    <td>' . $berasmiskinI . 'Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Miskin II</span></td>
                    <td><a href="javascript:void(0)" style="text-decoration: none; color:black;">' . $miskinII . '</a></td>
                    <td>' . $kkmiskinII . '</td>
                    <td>' . $berasmiskinII . 'Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Mampu</span></td>
                    <td>' . $mampu . '</td>
                    <td>' . $kkmampu . '</td>
                    <td>' . $berasmampu . 'Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Amil</span></td>
                    <td>' . $amil . '</td>
                    <td>' . $kkamil . '</td>
                    <td>' . $berasamil . 'Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Fisabillilah Ustadz</span></td>
                    <td>' . $fisabilillahu . '</td>
                    <td>' .  $kkfisabillilahu . '</td>
                    <td>' .  $berasfisau . ' Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Fisabillilah Santri</span></td>
                    <td>' . $fisabilillahs . '</td>
                    <td>' . $kkfisabillilahs . '</td>
                    <td>' . $berasfisas . ' Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Mualaf</span></td>
                    <td>' . $mualaf . '</td>
                    <td>' . $kkmualaf . '</td>
                    <td>' . $berasmualaf . ' Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Ibnu Sabil</span></td>
                    <td>' . $ibnusabil . '</class=>
                    </td>
                    <td>' . $kkibnusabil . '</td>
                    <td>' . $berasibnusabil . ' Kg</td>
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
        <p>Ketua Panitia Zakat Fitrah</p>
        <p>1 Syawal 1444H/Th.2023 M</p>
        <br>
        <br>
        <br>
        <p style="width: 200px; border-top: 1px solid black;" style="text-align: right; margin-top: 20px;" >Muhammad Radifan Hirzi</p>
    </div>

    




    </body>

    </html>';
// Mengambil HTML yang akan diubah menjadi PDF
$dompdf->loadHtml($html);

// Mengatur ukuran dan orientasi halaman
$dompdf->setPaper('A4', 'portrait');

// Merender HTML ke PDF
$dompdf->render();

// Mengirim output PDF ke browser
$dompdf->stream("cetak_distribusi.pdf", array("Attachment" => false));

exit(0);
