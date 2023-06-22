<?php include('header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pengumpulan Zakat Fitrah</h1>
    <p class="mb-4">Pengumpulan Zakat Fitrah / Data Pengumpulan<a target="_blank" href=""></a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama KK</th>
                            <th>Jumlah Tanggungan</th>
                            <th>Jenis Bayar</th>
                            <th>Jumlah Tanggungan Yang Dibayar</th>
                            <th>Beras</th>
                            <th>Uang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $limit = 4; // Jumlah data per halaman
                        $page = isset($_GET['page']) ? $_GET['page'] : 1; // Halaman aktif
                        $start = ($page - 1) * $limit; // Menentukan index data awal
                        $data = mysqli_query($koneksi, "SELECT * FROM bayar_zakat LIMIT $start, $limit");
                        $no = $start + 1; // Nomor urut data
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <th><?php echo $no++; ?></th>
                                <th><?php echo $d['nama_kk']; ?></th>
                                <th><?php echo $d['jumlah_tanggungan']; ?></th>
                                <th><?php echo $d['jenis_bayar']; ?></th>
                                <th><?php echo $d['jumlah_tanggunganyangdibayar']; ?></th>
                                <th><?php echo $d['bayar_beras']; ?> Kg</th>
                                <th>Rp<?= number_format($d['bayar_uang'], 0, ',', '.'); ?></th>
                                <th>
                                    <a href="edit_pengumpulan.php?id_zakat=<?php echo $d['id_zakat']; ?>"> Edit</a> |

                                    <a onclick="return konfirmasi()" href="delete_pengumpulan.php?id_zakat=<?php echo $d['id_zakat']; ?>"> Delete</a>

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
                $result = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM bayar_zakat");
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