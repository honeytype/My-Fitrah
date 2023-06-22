<?php
$id = $_REQUEST['id_kategori'];
include('koneksi.php');
$kategori_mustahik = mysqli_query($koneksi, "SELECT * FROM kategori_mustahik where id_kategori = $id");
$old = mysqli_fetch_array($kategori_mustahik);
$beras = mysqli_query($koneksi, "SELECT SUM(bayar_beras) AS total_beras FROM bayar_zakat");
$beras = mysqli_fetch_assoc($beras);
$persentase = 2;
$jumlah_hak = mysqli_query($koneksi, "SELECT SUM(bayar_beras) * $persentase / 100 AS total_hak FROM bayar_zakat");
$jumlah_hak = mysqli_fetch_assoc($jumlah_hak);
$persentase = 2;

?>
<?php include('header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Edit Data Mustahik</h1>
    <form method="POST" action="emustahik.php">
        <input type="hidden" name="id_kategori" value="<?= $old['id_kategori']; ?>">
        <div class="row mb-3">
            <label for="inputSelect" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="nama_kategori">
                    <option hidden selected>Pilih Kategori</option>
                    <option value="Amil" <?php if ($old['nama_kategori'] == 'Amil') echo 'selected'; ?>>Amil</option>
                    <option value="Fakir" <?php if ($old['nama_kategori'] == 'Fakir I') echo 'selected'; ?>>Fakir I</option>
                    <option value="Fakir" <?php if ($old['nama_kategori'] == 'Fakir II') echo 'selected'; ?>>Fakir II</option>
                    <option value="Miskin" <?php if ($old['nama_kategori'] == 'Miskin I') echo 'selected'; ?>>Miskin I</option>
                    <option value="Miskin" <?php if ($old['nama_kategori'] == 'Miskin II') echo 'selected'; ?>>Miskin II</option>
                    <option value="Fisabillilah" <?php if ($old['nama_kategori'] == 'Fisabillilah (Ustadz)') echo 'selected'; ?>>Fisabilillah (Ustadz)</option>
                    <option value="Fisabillilah" <?php if ($old['nama_kategori'] == 'Fisabillilah (Santri)') echo 'selected'; ?>>Fisabilillah (Santri)</option>
                    <option value="Mampu" <?php if ($old['nama_kategori'] == 'Mampu') echo 'selected'; ?>>Mampu</option>
                    <option value="Lainnya" <?php if ($old['nama_kategori'] == 'Mualaf') echo 'selected'; ?>>Mualaf</option>
                    <option value="Lainnya" <?php if ($old['nama_kategori'] == 'Ibnu Sabil') echo 'selected'; ?>>Ibnu Sabil</option>
                </select>
            </div>
        </div>
        <br>

        <!-- form input persentase -->
        <div class="row mb-3">
            <label for="inputPersentase" class="col-sm-2 col-form-label">Persentase</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPersentase" name="persentase" placeholder="Masukkan persentase" onblur="getJumlahHak()">
            </div>
        </div>
        <!-- form input jumlah hak -->
        <div class="row mb-3">
            <label for="inputText3" class="col-sm-2 col-form-label">Jumlah Hak Beras</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="jumlah_hak" readonly placeholder="Jumlah Hak (kg)">
            </div>
        </div>
        <script>
            function getJumlahHak() {
                var jumlahBeras = <?php echo $beras['total_beras']; ?>;
                var persentase = document.getElementById('inputPersentase').value;
                var jumlahHak = jumlahBeras * persentase / 100;
                document.getElementById('inputText3').value = jumlahHak;
            }
        </script>



        <button type="submit" class="btn btn-primary">Confirm</button>
    </form>

</div>
<!-- /.container-fluid -->

<?php include('footer.php'); ?>