<?php
include('header.php');
$id = $_REQUEST['id_mustahikwarga'];
include('koneksi.php');
$warga = mysqli_query($koneksi, "SELECT * FROM mustahik_warga where id_mustahikwarga = $id");
$wg = mysqli_fetch_array($warga);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Edit Data Distribusi Zakat Warga</h1>
    <form method="POST" action="ewarga.php">
        <input type="hidden" name="id_mustahikwarga" value="<?= $wg['id_mustahikwarga']; ?>">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" value="<?= $wg['nama']; ?>" class="form-control" value="<?= $wg['nama']; ?>" id="inputText3" name="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputSelect" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="kategori">
                    <option hidden selected>Pilih Kategori</option>
                    <option value="Fakir I" <?php echo ($wg['kategori'] == 'Fakir I') ? 'selected' : ''; ?>>Fakir I</option>
                    <option value="Fakir II" <?php echo ($wg['kategori'] == 'Fakir II') ? 'selected' : ''; ?>>Fakir II</option>
                    <option value="Miskin" <?php echo ($wg['kategori'] == 'Miskin') ? 'selected' : ''; ?>>Miskin</option>
                    <option value="Miskin II" <?php echo ($wg['kategori'] == 'Miskin II') ? 'selected' : ''; ?>>Miskin II</option>
                    <option value="Mampu" <?php echo ($wg['kategori'] == 'Mampu') ? 'selected' : ''; ?>>Mampu</option>
                </select>



            </div>
        </div>


        <button type="submit" class="btn btn-primary">Add Data</button>
    </form>

</div>
<!-- /.container-fluid -->

<?php include('footer.php'); ?>