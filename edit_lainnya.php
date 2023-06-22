<?php
include('header.php');
$id = $_REQUEST['id_mustahiklainnya'];
include('koneksi.php');
$lain = mysqli_query($koneksi, "SELECT * FROM mustahik_lainnya where id_mustahiklainnya = $id");
$ln = mysqli_fetch_array($lain); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Edit Data Distribusi Zakat </h1>
    <form method="POST" action="elainnya.php">
        <input type="hidden" name="id_mustahiklainnya" value="<?= $ln['id_mustahiklainnya']; ?>">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" value="<?= $ln['nama']; ?>" class="form-control" value="<?= $ln['nama']; ?>" id="inputText3" name="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputSelect" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="kategori">
                    <option hidden selected>Pilih Kategori</option>
                    <option value="Amil" <?php echo ($ln['kategori'] == 'Amil') ? 'selected' : ''; ?>>Amil</option>
                    <option value="Fisabillilah (Ustadz)" <?php echo ($ln['kategori'] == 'Fisabillilah (Ustadz)') ? 'selected' : ''; ?>>Fisabillilah (Ustadz)</option>
                    <option value="Fisabillilah (Santri)" <?php echo ($ln['kategori'] == 'Fisabillilah (Santri)') ? 'selected' : ''; ?>>Fisabillilah (Santri)</option>
                    <option value="Mualaf" <?php echo ($ln['kategori'] == 'Mualaf') ? 'selected' : ''; ?>>Mualaf</option>
                    <option value="Ibnu Sabil" <?php echo ($ln['kategori'] == 'Ibnu Sabil') ? 'selected' : ''; ?>>Ibnu Sabil</option>
                </select>

            </div>
        </div>


        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

</div>
<!-- /.container-fluid -->

<?php include('footer.php'); ?>