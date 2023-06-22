<?php include('header.php'); ?>
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

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Laporan Distribusi Zakat Fitrah</h1>
    <p class="mb-4">Laporan Distribusi / Zakat Fitrah<a target="_blank" href=> </a>.</p>
    <div>
        <a href="lap-distribusi.php" class="btn btn-rounded btn-outline-primary" target="_blank">
            Export to PDF
        </a>
    </div>
    <br>
    <!-- Earnings (Monthly) Card Example -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="mustahik_table" class="table-responsive">
                            <table style="border: 2px;" id="zero_config" class="table table-striped table-bordered no-wrap">
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
                                        <td><span class="font-bold link ">Fakir I</span></td>
                                        <td><a href="javascript:void(0)" class="font-bold link"><?= $fakirI; ?></a></td>
                                        <td><?= $kkfakirI; ?></td>
                                        <td><? $berasfakirI ?> Kg</td>
                                    </tr>
                                    <tr>
                                        <td><span class="font-bold link ">Fakir II</span></td>
                                        <td><a href="javascript:void(0)" class="font-bold link"><?= $fakirII; ?></a></td>
                                        <td><?= $kkfakirII; ?></td>
                                        <td><?= $berasfakirII ?> Kg</td>
                                    </tr>
                                    <tr>
                                        <td><span class="font-bold link">Miskin I</span></td>
                                        <td><a href="javascript:void(0)" class="font-bold link"><?= $miskinI; ?></a></td>
                                        <td><?= $kkmiskinI; ?></td>
                                        <td><?= $berasmiskinI ?> Kg</td>
                                    </tr>
                                    <tr>
                                        <td><span class="font-bold link">Miskin II</span></td>
                                        <td><a href="javascript:void(0)" class="font-bold link"><?= $miskinII; ?></a></td>
                                        <td><?= $kkmiskinII ?></td>
                                        <td><?= $berasmiskinII ?> Kg</td>
                                    </tr>
                                    <tr>
                                        <td><span class="font-bold link">Mampu</span></td>
                                        <td><a href="javascript:void(0)" class="font-bold link"><?= $mampu; ?></a></td>
                                        <td><?= $kkmampu; ?></td>
                                        <td><?= $berasmampu ?> Kg</td>
                                    </tr>
                                    <tr>
                                        <td><span class="font-bold link">Amil</span></td>
                                        <td><a href="javascript:void(0)" class="font-bold link"><?= $amil; ?></a></td>
                                        <td><?= $kkamil ?></td>
                                        <td><?= $berasamil ?> Kg</td>
                                    </tr>
                                    <tr>
                                        <td><span class="font-bold link">Fisabillilah Ustadz</span></td>
                                        <td><a href="javascript:void(0)" class="font-bold link"><?= $fisabilillahu; ?></a></td>
                                        <td><?= $kkfisabillilahu ?></td>
                                        <td><?= $berasfisau; ?> Kg</td>
                                    </tr>
                                    <tr>
                                        <td><span class="font-bold link">Fisabillilah Santri</span></td>
                                        <td><a href="javascript:void(0)" class="font-bold link"><?= $fisabilillahs; ?></a></td>
                                        <td><?= $kkfisabillilahs; ?></td>
                                        <td><?= $berasfisas; ?> Kg</td>
                                    </tr>
                                    <tr>
                                        <td><span class="font-bold link">Mualaf</span></td>
                                        <td><a href="javascript:void(0)" class="font-bold link"><?= $mualaf; ?></a></td>
                                        <td><?= $kkmualaf; ?></td>
                                        <td><?= $berasmualaf; ?> Kg</td>
                                    </tr>
                                    <tr>
                                        <td><span class="font-bold link">Ibnu Sabil</span></td>
                                        <td><a href="javascript:void(0)" class="font-bold link"><?= $ibnusabil; ?></a></td>
                                        <td><?= $kkibnusabil ?></td>
                                        <td><?= $berasibnusabil ?> Kg</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


<?php include('footer.php') ?>