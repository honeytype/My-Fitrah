<?php
$id = $_REQUEST['id_muzakki'];
include('koneksi.php');
$muzakki = mysqli_query($koneksi, "SELECT * FROM muzakki where id_muzakki = $id");
$m = mysqli_fetch_array($muzakki);
include('header.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Pembayaran Zakat Fitrah</h1>
    <form method="POST" action="tdata.php">
        <input type="hidden" name="id_muzakki" value="<?= $m['id_muzakki']; ?>">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Muzakki/KK</label>
            <div class="col-sm-10">
                <input type="text" value="<?= $m['nama_muzakki']; ?>" class="form-control" id="inputText3" name="nama_kk">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Tanggungan</label>
            <div class="col-sm-10">
                <input type="text" value="<?= $m['jumlah_tanggungan']; ?>" class="form-control" id="inputText3" name="jumlah_tanggungan">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Bayar</label>
            <div class="col-sm-10">
                <select class="form-control" id="inputText3" name="jenis_bayar">
                    <option value="beras">Beras</option>
                    <option value="uang">Uang</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Tanggungan Yang Dibayar</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="jumlah_tanggunganyangdibayar">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Confirm</button>
    </form>

</div>
<!-- /.container-fluid -->


<?php include('footer.php') ?>