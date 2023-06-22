<?php
//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form
$id_mustahiklainnya = $_POST['id_mustahiklainnya'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$persentase = 2;
$jumlah_hak = mysqli_query($koneksi, "SELECT SUM(bayar_beras) * $persentase / 100 AS total_hak FROM bayar_zakat");
$jumlah_hak = mysqli_fetch_assoc($jumlah_hak)['total_hak'];

if ($_POST['kategori'] == "Amil") {
    $hak = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Amil'");
    $hak = mysqli_fetch_assoc($hak)['jumlah_hak'];
} else if ($_POST['kategori'] == "Fisabillilah (Ustadz)") {
    $hak = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Fisabillilah (Ustadz)'");
    $hak = mysqli_fetch_assoc($hak)['jumlah_hak'];
} else if ($_POST['kategori'] == "Fisabillilah (Santri)") {
    $hak = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Fisabillilah (Santri)'");
    $hak = mysqli_fetch_assoc($hak)['jumlah_hak'];
} else if ($_POST['kategori'] == "Mualaf") {
    $hak = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Mualaf'");
    $hak = mysqli_fetch_assoc($hak)['jumlah_hak'];
} else if ($_POST['kategori'] == "Ibnu Sabil") {
    $hak = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Ibnu Sabil'");
    $hak = mysqli_fetch_assoc($hak)['jumlah_hak'];
}

//menginput data ke database
$update = mysqli_query($koneksi, "UPDATE mustahik_lainnya SET nama='$nama', kategori='$kategori', hak='$hak' WHERE id_mustahiklainnya='$id_mustahiklainnya'");
if ($update) {
    // redirect ke halaman distribusi_warga.php jika update berhasil
    header("location:distribusi_lainnya.php");
    exit();
} else {
    // tampilkan pesan error jika update gagal
    echo "Update gagal: " . mysqli_error($koneksi);
}
