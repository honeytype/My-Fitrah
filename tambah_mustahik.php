<?php include('header.php');
include('koneksi.php');
$beras = mysqli_query($koneksi, "SELECT SUM(bayar_beras) AS total_beras FROM bayar_zakat");
$beras = mysqli_fetch_assoc($beras);
$persentase = 2;
$jumlah_hak = mysqli_query($koneksi, "SELECT SUM(bayar_beras) * $persentase / 100 AS total_hak FROM bayar_zakat");
$jumlah_hak = mysqli_fetch_assoc($jumlah_hak);
$persentase = 2;
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Insert Data Mustahik</h1>
    <form method="POST" action="tmustahik.php">
        <div class="row mb-3">
            <label for="inputSelect" class="col-sm-2 col-form-label">Kategori Mustahik</label>
            <div class="col-sm-10">
                <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="nama_kategori">
                    <option hidden selected>Pilih Kategori</option>
                    <option value="Amil">Amil</option>
                    <option value="Fakir I">Fakir I</option>
                    <option value="Fakir II">Fakir II</option>
                    <option value="Miskin I">Miskin I</option>
                    <option value="Miskin II">Miskin II</option>
                    <option value="Fisabillilah (Ustadz)">Fisabilillah (Ustadz)</option>
                    <option value="Fisabillilah (Santri)">Fisabilillah (Santri)</option>
                    <option value="Mampu">Mampu</option>
                    <option value="Mualaf">Mualaf</option>
                    <option value="Ibnu Sabil">Ibnu Sabil</option>
                </select>
            </div>
        </div>
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


        <button type="submit" class="btn btn-primary">Add Data</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>