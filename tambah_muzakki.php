<?php include('header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Insert Data Muzakki</h1>
    <form method="POST" action="tmuzakki.php">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Muzakki</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="nama_muzakki">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Tanggungan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="jumlah_tanggungan">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputSelect" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="keterangan">
                    <option hidden selected>Pilih Kategori</option>
                    <option value="Warga Tetap">Warga Tetap</option>
                    <option value="Warga Sementara">Warga Sementara</option>

                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Add Data</button>
    </form>

</div>
<!-- /.container-fluid -->
<?php include('footer.php'); ?>