<?php
include('koneksi.php');

$persentase = 2;
$jumlah_hak = mysqli_query($koneksi, "SELECT SUM(bayar_beras) * $persentase / 100 AS total_hak FROM bayar_zakat");
$jumlah_hak = mysqli_fetch_assoc($jumlah_hak)['total_hak'];
$fakirI = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Fakir I'");
$fakirI = mysqli_fetch_assoc($fakirI)['jumlah_hak'];
$fakirII = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Fakir II'");
$fakirII = mysqli_fetch_assoc($fakirII)['jumlah_hak'];
$miskinI = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Miskin I'");
$miskinI = mysqli_fetch_assoc($miskinI)['jumlah_hak'];
$miskinII = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Miskin II'");
$miskinII = mysqli_fetch_assoc($miskinII)['jumlah_hak'];
$mampu = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Mampu'");
$mampu = mysqli_fetch_assoc($mampu)['jumlah_hak'];
$amil = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Amil'");
$amil = mysqli_fetch_assoc($amil)['jumlah_hak'];
$fisabillilahu = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Fisabillilah (Ustadz)'");
$fisabilillahu = mysqli_fetch_assoc($fisabillilahu)['jumlah_hak'];
$fisabillilahs = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Fisabillilah (Santri)'");
$fisabilillahs = mysqli_fetch_assoc($fisabillilahs)['jumlah_hak'];
$mualaf = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Mualaf'");
$mualaf = mysqli_fetch_assoc($mualaf)['jumlah_hak'];
$ibnusabil = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Ibnu Sabil'");
$ibnusabil = mysqli_fetch_assoc($ibnusabil)['jumlah_hak'];
$kkfakirI = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah_fakirI FROM mustahik_warga WHERE kategori = 'Fakir I';");
$kkfakirI = mysqli_fetch_assoc($kkfakirI)['jumlah_fakirI'];
$kkfakirII = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah_fakirII FROM mustahik_warga WHERE kategori = 'Fakir II';");
$kkfakirII = mysqli_fetch_assoc($kkfakirII)['jumlah_fakirII'];
$kkmiskinI = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah_miskinI FROM mustahik_warga WHERE kategori = 'Miskin I';");
$kkmiskinI = mysqli_fetch_assoc($kkmiskinI)['jumlah_miskinI'];
$kkmiskinII = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah_miskinII FROM mustahik_warga WHERE kategori = 'Miskin II';");
$kkmiskinII = mysqli_fetch_assoc($kkmiskinII)['jumlah_miskinII'];
$kkmampu = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah_mampu FROM mustahik_warga WHERE kategori = 'Mampu';");
$kkmampu = mysqli_fetch_assoc($kkmampu)['jumlah_mampu'];
$kkamil = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah_amil FROM mustahik_lainnya WHERE kategori = 'Amil';");
$kkamil = mysqli_fetch_assoc($kkamil)['jumlah_amil'];
$kkfisabillilahu = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah_fisabillilahu FROM mustahik_lainnya WHERE kategori = 'fisabillilah (Ustadz)';");
$kkfisabillilahu = mysqli_fetch_assoc($kkfisabillilahu)['jumlah_fisabillilahu'];
$kkfisabillilahs = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah_fisabillilahs FROM mustahik_lainnya WHERE kategori = 'fisabillilah (Santri)';");
$kkfisabillilahs = mysqli_fetch_assoc($kkfisabillilahs)['jumlah_fisabillilahs'];
$kkmualaf = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah_mualaf  FROM mustahik_lainnya WHERE kategori = 'Mualaf';");
$kkmualaf = mysqli_fetch_assoc($kkmualaf)['jumlah_mualaf'];
$kkibnusabil = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah_ibnusabil  FROM mustahik_lainnya WHERE kategori = 'Ibnu Sabil';");
$kkibnusabil = mysqli_fetch_assoc($kkibnusabil)['jumlah_ibnusabil'];
$berasfakirI = mysqli_query($koneksi, "SELECT SUM(hak) AS total_beras FROM mustahik_warga WHERE kategori = 'Fakir I';");
$berasfakirI = mysqli_fetch_assoc($berasfakirI)['total_beras'];
$berasfakirII = mysqli_query($koneksi, "SELECT SUM(hak) AS total_beras FROM mustahik_warga WHERE kategori = 'Fakir II';");
$berasfakirII = mysqli_fetch_assoc($berasfakirII)['total_beras'];
$berasmiskinI = mysqli_query($koneksi, "SELECT SUM(hak) AS total_beras FROM mustahik_warga WHERE kategori = 'Miskin I';");
$berasmiskinI = mysqli_fetch_assoc($berasmiskinI)['total_beras'];
$berasmiskinII = mysqli_query($koneksi, "SELECT SUM(hak) AS total_beras FROM mustahik_warga WHERE kategori = 'Miskin II';");
$berasmiskinII = mysqli_fetch_assoc($berasmiskinII)['total_beras'];
$berasmampu = mysqli_query($koneksi, "SELECT SUM(hak) AS total_beras FROM mustahik_warga WHERE kategori = 'Mampu';");
$berasmampu = mysqli_fetch_assoc($berasmampu)['total_beras'];
$berasamil = mysqli_query($koneksi, "SELECT SUM(hak) AS total_beras FROM mustahik_lainnya WHERE kategori = 'Amil';");
$berasamil = mysqli_fetch_assoc($berasamil)['total_beras'];
$berasfisau = mysqli_query($koneksi, "SELECT SUM(hak) AS total_beras FROM mustahik_lainnya WHERE kategori = 'Fisabillilah (Ustadz)';");
$berasfisau = mysqli_fetch_assoc($berasfisau)['total_beras'];
$berasfisas = mysqli_query($koneksi, "SELECT SUM(hak) AS total_beras FROM mustahik_lainnya WHERE kategori = 'Fisabillilah (Santri)';");
$berasfisas = mysqli_fetch_assoc($berasfisas)['total_beras'];
$berasmualaf = mysqli_query($koneksi, "SELECT SUM(hak) AS total_beras FROM mustahik_lainnya WHERE kategori = 'Mualaf';");
$berasmualaf = mysqli_fetch_assoc($berasmualaf)['total_beras'];
$berasibnusabil = mysqli_query($koneksi, "SELECT SUM(hak) AS total_beras FROM mustahik_lainnya WHERE kategori = 'Ibnu Sabil';");
$berasibnusabil = mysqli_fetch_assoc($berasibnusabil)['total_beras'];

?>

<!-- Begin Page Content -->
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
            1 SYAWAL 1432 H/TH 2011 M
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
                    <td><a href="javascript:void(0)" style="text-decoration: none; color:black;"><?= $fakirI; ?></a></td>
                    <td><?= $kkfakirI; ?></td>
                    <td><?= $berasfakirI ?> Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Fakir II</span></td>
                    <td><a href="javascript:void(0)" style="text-decoration: none; color:black;"><?= $fakirII; ?></a></td>
                    <td><?= $kkfakirII; ?></td>
                    <td><?= $berasfakirII ?> Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Miskin I</span></td>
                    <td><a href="javascript:void(0)" style="text-decoration: none; color:black;"><?= $miskinI; ?></a></td>
                    <td><?= $kkmiskinI; ?></td>
                    <td><?= $berasmiskinI ?> Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Miskin II</span></td>
                    <td><a href="javascript:void(0)" style="text-decoration: none; color:black;"><?= $miskinII; ?></a></td>
                    <td><?= $kkmiskinII ?></td>
                    <td><?= $berasmiskinII ?> Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Mampu</span></td>
                    <td><?= $mampu; ?></td>
                    <td><?= $kkmampu; ?></td>
                    <td><?= $berasmampu ?> Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Amil</span></td>
                    <td><?= $amil; ?></td>
                    <td><?= $kkamil ?></td>
                    <td><?= $berasamil ?> Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Fisabillilah Ustadz</span></td>
                    <td><?= $fisabilillahu; ?></td>
                    <td><?= $kkfisabillilahu ?></td>
                    <td><?= $berasfisau; ?> Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Fisabillilah Santri</span></td>
                    <td><?= $fisabilillahs; ?></td>
                    <td><?= $kkfisabillilahs; ?></td>
                    <td><?= $berasfisas; ?> Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Mualaf</span></td>
                    <td><?= $mualaf; ?></td>
                    <td><?= $kkmualaf; ?></td>
                    <td><?= $berasmualaf; ?> Kg</td>
                </tr>
                <tr>
                    <td><span class="font-bold">Ibnu Sabil</span></td>
                    <td><?= $ibnusabil; ?></class=>
                    </td>
                    <td><?= $kkibnusabil ?></td>
                    <td><?= $berasibnusabil ?> Kg</td>
                </tr>
            </tbody>
        </table>
    </body>

    </html>


