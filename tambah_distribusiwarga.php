<?php include('header.php');
$id = $_REQUEST['id_muzakki'];
include('koneksi.php');
$muzakki = mysqli_query($koneksi, "SELECT * FROM muzakki where id_muzakki = $id");
$n = mysqli_fetch_array($muzakki);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Insert Data Distribusi Zakat Warga</h1>
    <form method="POST" action="tdiswarga.php">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?= $n['nama_muzakki']; ?>" id="inputText3" name="nama_muzakki">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputSelect" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select class="form-control" aria-label=".form-select-lg example" id=" inputSelect" name="kategori">
                    <option hidden selected>Pilih Kategori</option>
                    <option value="Mampu">Mampu</option>
                    <option value="Fakir I">Fakir I</option>
                    <option value="Fakir II">Fakir II</option>
                    <option value="Miskin I">Miskin I</option>
                    <option value="Miskin II">Miskin II</option>
                </select>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Add Data</button>
    </form>

</div>
<!-- /.container-fluid -->

<?php include('footer.php'); ?>