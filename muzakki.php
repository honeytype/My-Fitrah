<?php
include('header.php');
require_once "koneksi.php";

// Mengatur jumlah data per halaman
$limit = 3;

// Mengambil halaman saat ini dari parameter URL
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Menghitung offset berdasarkan halaman saat ini
$offset = ($page - 1) * $limit;

// Mengambil total jumlah data
$query_total = "SELECT COUNT(*) AS total FROM muzakki";
$result_total = mysqli_query($koneksi, $query_total);
$row_total = mysqli_fetch_assoc($result_total);
$total_data = $row_total['total'];

// Menghitung total jumlah halaman
$total_pages = ceil($total_data / $limit);

// Mengambil data muzakki dengan batasan per halaman
$query_data = "SELECT * FROM muzakki LIMIT $offset, $limit";
$result_data = mysqli_query($koneksi, $query_data);

// Menampilkan data muzakki
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Muzakki</h1>
    <p class="mb-4">Master Data / Muzakki<a target="_blank" href=""></a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="tambah_muzakki.php" class="btn btn-primary"> Add Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Jumlah Tanggungan</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Bayar Zakat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($d = mysqli_fetch_array($result_data)) { ?>
                            <tr>
                                <td><?= $d['id_muzakki']; ?></td>
                                <td><?= $d['nama_muzakki']; ?></td>
                                <td><?= $d['jumlah_tanggungan']; ?></td>
                                <td><?= $d['keterangan']; ?></td>
                                <td><?= $d['status']; ?></td>
                                <td>
                                    <div class="form-group text-center">
                                        <button type="button" <?php if ($d['status'] == "Sudah Bayar") {
                                                                    echo "disabled";
                                                                } ?> id_muzakki="<?php echo $d["id_muzakki"]; ?>" class="btn btn-rounded btn-outline-primary bayar" data-toggle="modal" data-target="#add_bayar_Modal" id="insert_bayar">
                                            <a <?php if ($d['status'] == "Belum Bayar") : ?> href="bayar.php?id_muzakki=<?= $d['id_muzakki']; ?>" <?php else : ?> href="javascript:void(0)" <?php endif; ?> style="text-decoration:none;color:inherit;">Bayar</a>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    <a href="edit_muzakki.php?id_muzakki=<?php echo $d['id_muzakki']; ?>"><i data-feather="x-circle" class="svg-icon"></i> Edit</a> |
                                    <a onclick="return konfirmasi()" href="delete_muzakki.php?id_muzakki=<?php echo $d['id_muzakki']; ?>"><i data-feather="x-circle" class="svg-icon"></i> Delete</a> |
                                    <a href="tambah_distribusiwarga.php?id_muzakki=<?= $d['id_muzakki']; ?>"><i data-feather="x-circle" class="svg-icon"></i> Distribusi</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <ul class="pagination float-right">
        <?php if ($page > 1) { ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo ($page - 1); ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
        <?php } ?>
        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
            <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
        <?php } ?>
        <?php if ($page < $total_pages) { ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo ($page + 1); ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        <?php } ?>
    </ul>


</div>
<!-- /.container-fluid -->

<script>
    function konfirmasi() {
        if (confirm('Apakah Anda yakin untuk menghapus data ini?')) {
            return true;
        } else {
            return false;
        }
    }
</script>

<?php include('footer.php'); ?>