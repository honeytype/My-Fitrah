<?php
include('header.php') ?>
<?php
include('koneksi.php');
// Mengecek apakah pengguna telah login
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
$sudah = mysqli_query($koneksi, "SELECT * FROM muzakki WHERE status='Sudah Bayar'");
$sudah = mysqli_num_rows($sudah);
$belum = mysqli_query($koneksi, "SELECT * FROM muzakki WHERE status='Belum Bayar'");
$belum = mysqli_num_rows($belum);
$total = mysqli_query($koneksi, "SELECT * FROM muzakki");
$total = mysqli_num_rows($total);
$muzakki = mysqli_query($koneksi, "SELECT SUM(jumlah_tanggungan) AS total_muzakki FROM muzakki");
$muzakki = mysqli_fetch_assoc($muzakki);
$mustahik = mysqli_query($koneksi, "SELECT * FROM mustahik_warga UNION SELECT * FROM mustahik_lainnya");
$mustahik = mysqli_num_rows($mustahik);
$kategori = mysqli_query($koneksi, "SELECT * FROM kategori_mustahik");
$kategori = mysqli_num_rows($kategori);
$beras = mysqli_query($koneksi, "SELECT SUM(bayar_beras) AS total_beras FROM bayar_zakat");
$beras = mysqli_fetch_assoc($beras);
$uang = mysqli_query($koneksi, "SELECT SUM(bayar_uang) AS total_uang FROM bayar_zakat");
$uang = mysqli_fetch_assoc($uang);
$queryWarga = mysqli_query($koneksi, "SELECT SUM(hak) AS total_distribusi FROM mustahik_warga");
$resultWarga = mysqli_fetch_assoc($queryWarga);
$totalDistribusiWarga = $resultWarga['total_distribusi'];
$queryLainnya = mysqli_query($koneksi, "SELECT SUM(hak) AS total_distribusi FROM mustahik_lainnya");
$resultLainnya = mysqli_fetch_assoc($queryLainnya);
$totalDistribusiLainnya = $resultLainnya['total_distribusi'];
$totalDistribusi = $totalDistribusiWarga + $totalDistribusiLainnya;
$pengumpulan = mysqli_query($koneksi, "SELECT * FROM bayar_zakat");
$pengumpulan = mysqli_num_rows($pengumpulan);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang <?php echo $_SESSION['username']; ?></h1>
    <p class="mb-4">My Fitrah | Pencatatan Zakat Fitrah<a target="_blank" href=""></a>.</p>

    <!-- Earnings (Monthly) Card Example -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="laporan_pengumpulan.php" class="text-primary">Sudah Zakat</a>

                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sudah; ?>/<?= $total; ?> KK</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="muzakki.php" class="text-primary">Total KK</a>

                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="distribusi_lainnya.php" class="text-primary">Total Mustahik</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $mustahik; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="laporan_pengumpulan.php" class="text-primary">Total Zakat Beras</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $beras['total_beras']; ?> Kg</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="laporan_pengumpulan.php" class="text-primary">Total Zakat Uang</a>

                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp<?= $uang['total_uang']; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="laporan_distribusi.php" class="text-primary">Total Zakat Terdistribusi</a>

                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalDistribusi; ?> Kg</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="mustahik.php" class="text-primary">Kategori Mustahik</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kategori; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="muzakki.php" class="text-primary">Total Jiwa</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $muzakki['total_muzakki']; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="muzakki.php" class="text-primary">Belum Zakat</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $belum; ?>/<?= $total; ?> KK</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php include('footer.php') ?>