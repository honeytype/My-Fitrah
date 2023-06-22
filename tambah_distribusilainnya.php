<?php include('header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Insert Data Distribusi Zakat </h1>
    <form method="POST" action="tdislainnya.php">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputSelect" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="kategori">
                    <option selected>Pilih Kategori</option>
                    <option value="Amil">Amil</option>
                    <option value="Fisabillilah (Ustadz)">Fisabillilah (Ustadz)</option>
                    <option value="Fisabillilah (Santri)">Fisabillilah (Santri)</option>
                    <option value="Mualaf">Mualaf</option>
                    <option value="Ibnu Sabil">Ibnu Sabil</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

</div>
<!-- /.container-fluid -->

<?php include('footer.php'); ?>