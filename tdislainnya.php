<?php
//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form 
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
$insert = mysqli_query($koneksi, "INSERT INTO mustahik_lainnya (nama, kategori, hak) VALUES ('$nama', '$kategori', '$hak')");

//mengalihkan halaman kembali ke distribusi_lainnya.php
header("location:distribusi_lainnya.php");
