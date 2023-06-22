<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id_zakat = $_POST['id_zakat'];
$nama_kk = $_POST['nama_kk'];
$jumlah_tanggungan = $_POST['jumlah_tanggungan'];
$jenis_bayar = $_POST['jenis_bayar'];
$jumlah_tanggunganyangdibayar = $_POST['jumlah_tanggunganyangdibayar'];
$bayar_beras = $_POST['bayar_beras'];
$bayar_uang = $_POST['bayar_uang'];
if ($_POST['jenis_bayar'] == "beras") {
    $bayar_beras = $_POST['jumlah_tanggunganyangdibayar'] * 2.5;
    $bayar_uang = 0;
} else {
    $bayar_beras = 0;
    $bayar_uang = $_POST['jumlah_tanggunganyangdibayar'] * 30000;
}
// mengupdate data di database
$update = mysqli_query($koneksi, "UPDATE bayar_zakat SET nama_kk='$nama_kk', jumlah_tanggungan='$jumlah_tanggungan', jenis_bayar='$jenis_bayar', jumlah_tanggunganyangdibayar='$jumlah_tanggunganyangdibayar', bayar_beras='$bayar_beras', bayar_uang='$bayar_uang' WHERE id_zakat='$id_zakat'");

if ($update) {
    // redirect ke halaman data_pengumpulan.php jika update berhasil
    header("location:data_pengumpulan.php");
    exit();
} else {
    // tampilkan pesan error jika update gagal
    echo "Update gagal: " . mysqli_error($koneksi);
}
