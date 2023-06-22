<?php
include('header.php');
$id = $_REQUEST['id_zakat'];
include('koneksi.php');
$bayar = mysqli_query($koneksi, "SELECT * FROM bayar_zakat where id_zakat = $id");
$zk = mysqli_fetch_array($bayar);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Edit Data Pembayaran Zakat</h1>
    <form method="POST" action="epengumpulan.php">
        <input type="hidden" name="id_zakat" value="<?= $zk['id_zakat']; ?>">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Muzakki/KK</label>
            <div class="col-sm-10">
                <input type="text" value="<?= $zk['nama_kk']; ?>" class="form-control" id="inputText3" name="nama_kk">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Tanggungan</label>
            <div class="col-sm-10">
                <input type="text" value="<?= $zk['jumlah_tanggungan']; ?>" class="form-control" id="inputText3" name="jumlah_tanggungan">
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
                <input type="text" value="<?= $zk['jumlah_tanggunganyangdibayar']; ?>" class="form-control" id="inputText3" name="jumlah_tanggunganyangdibayar">
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Confirm</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>

<?php include('footer.php') ?>