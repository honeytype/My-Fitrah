<?php include('header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Distribusi Zakat Fitrah</h1>
    <p class="mb-4">Distribusi Zakat / Mustahik lainnya<a target="_blank" href=""></a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="tambah_distribusilainnya.php" class="btn btn-primary"> Add Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Hak</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $limit = 4; // Jumlah data per halaman
                        $page = isset($_GET['page']) ? $_GET['page'] : 1; // Halaman aktif
                        $start = ($page - 1) * $limit; // Menentukan index data awal
                        $data = mysqli_query($koneksi, "SELECT * FROM mustahik_lainnya LIMIT $start, $limit");
                        $no = $start + 1; // Nomor urut data
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <th><?php echo $no++; ?></th>
                                <th><?php echo $d['nama']; ?></th>
                                <th><?php echo $d['kategori']; ?></th>
                                <th><?php echo $d['hak']; ?></th>
                                <th>

                                    <a href="edit_lainnya.php?id_mustahiklainnya=<?php echo $d['id_mustahiklainnya']; ?>">Edit</a> |

                                    <a onclick="return konfirmasi()" href="delete_lainnya.php?id_mustahiklainnya=<?php echo $d['id_mustahiklainnya']; ?>"><i data-feather="x-circle" class="svg-icon"></i> Delete</a>

                                </th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <ul class="pagination float-right">
                <?php
                $result = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM mustahik_lainnya");
                $row = mysqli_fetch_assoc($result);
                $total_pages = ceil($row['total'] / $limit); // Jumlah total halaman
                ?>
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
    </div>

</div>
<!-- /.container-fluid -->

<script>
    function konfirmasi() {
        if (confirm('Apakah Anda yakin untuk menghapus data ini?')) {
            return true; // akan mengalihkan ke halaman yang dituju jika pengguna menekan "OK"
        } else {
            return false; // tidak akan mengalihkan halaman jika pengguna menekan "Batal"
        }
    }
</script>

<?php include('footer.php'); ?>