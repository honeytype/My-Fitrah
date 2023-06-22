<?php
$id = $_REQUEST['id_muzakki'];
include('koneksi.php');
$muzakki = mysqli_query($koneksi, "SELECT * FROM muzakki where id_muzakki = $id");
$old = mysqli_fetch_array($muzakki);

?>
<?php include('header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Edit Data Muzakki</h1>
    <form method="POST" action="emuzakki.php">
        <input type="hidden" name="id_muzakki" value="<?= $old['id_muzakki']; ?>">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Muzakki</label>
            <div class="col-sm-10">
                <input type="text" value="<?= $old['nama_muzakki']; ?>" class="form-control" id="inputText3" name="nama_muzakki">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Tanggungan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?= $old['jumlah_tanggungan']; ?>" id="inputText3" name="jumlah_tanggungan">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputSelect" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="keterangan">
                    <?php if ($old['keterangan'] == "Warga Tetap") : ?>
                        <option value="Warga Tetap" selected>Warga Tetap</option>
                        <option value="Warga Sementara">Warga Sementara</option>
                    <?php else : ?>
                        <option value="Warga Sementara" selected>Warga Sementara</option>
                        <option value="Warga Tetap">Warga Tetap</option>
                    <?php endif; ?>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Confirm</button>
    </form>

</div>
<!-- /.container-fluid -->

<?php include('footer.php'); ?>