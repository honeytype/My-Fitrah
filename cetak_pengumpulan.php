<?php
include('koneksi.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$sudah = mysqli_query($koneksi, "SELECT * FROM muzakki WHERE status='Sudah Bayar'");
$sudah = mysqli_num_rows($sudah);
$total = mysqli_query($koneksi, "SELECT * FROM muzakki");
$total = mysqli_num_rows($total);
$beras = mysqli_query($koneksi, "SELECT SUM(bayar_beras) AS total_beras FROM bayar_zakat");
$beras = mysqli_fetch_assoc($beras);
$uang = mysqli_query($koneksi, "SELECT SUM(bayar_uang) AS total_uang FROM bayar_zakat");
$uang = mysqli_fetch_assoc($uang);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <center>
            <h3 class="h3 mb-2 text-gray-800">LAPORAN KEGIATAN PENGUMPULAN ZAKAT FITRAH 1444H/2023M</h3>
            <h3 class="h3 mb-2 text-gray-800">MASJID BAITURRAHIM JATISARI KEDUNGREJA CILACAP </h3>
        </center>
        <br>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="table-light style=" border-top: 2px solid #000;">
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Total Muzakki</th>
                                <td>:</td>
                                <td><?= $total; ?> Kepala Keluarga</td>
                            </tr>
                            <tr>
                                <th scope="row">Sudah Zakat</th>
                                <td>:</td>
                                <td><?= $sudah; ?> Keluarga</td>
                            </tr>
                            <tr>
                                <th scope="row">Total Zakat Beras</th>
                                <td>:</td>
                                <td><?= $beras['total_beras']; ?> Kg</td>
                            </tr>
                            <tr>
                                <th scope="row">Total Zakat Uang</th>
                                <td>:</td>
                                <td>Rp<?php $number = $uang['total_uang'];
                                        $formattedNumber = number_format($number, 2, '.', ',');
                                        echo $formattedNumber; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->