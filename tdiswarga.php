<?php
//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form 
$nama_muzakki = $_POST['nama_muzakki'];
$kategori = $_POST['kategori'];
$persentase = 2;
$jumlah_hak = mysqli_query($koneksi, "SELECT SUM(bayar_beras) * $persentase / 100 AS total_hak FROM bayar_zakat");
$jumlah_hak = mysqli_fetch_assoc($jumlah_hak)['total_hak'];

if ($_POST['kategori'] == "Fakir I") {
    $hak = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Fakir I'");
    $hak = mysqli_fetch_assoc($hak)['jumlah_hak'];
} else if ($_POST['kategori'] == "Fakir II") {
    $hak = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Fakir II'");
    $hak = mysqli_fetch_assoc($hak)['jumlah_hak'];
} else if ($_POST['kategori'] == "Miskin I") {
    $hak = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Miskin I'");
    $hak = mysqli_fetch_assoc($hak)['jumlah_hak'];
} else if ($_POST['kategori'] == "Miskin II") {
    $hak = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Miskin II'");
    $hak = mysqli_fetch_assoc($hak)['jumlah_hak'];
} else if ($_POST['kategori'] == "Mampu") {
    $hak = mysqli_query($koneksi, "SELECT jumlah_hak FROM kategori_mustahik WHERE nama_kategori='Mampu'");
    $hak = mysqli_fetch_assoc($hak)['jumlah_hak'];
}

//menginput data ke database 
$update = mysqli_query($koneksi, "UPDATE muzakki SET status='$status' WHERE id_muzakki='$id_muzakki'");

//menginput data ke database 
$insert = mysqli_query($koneksi, "INSERT INTO mustahik_warga (nama, kategori, hak) VALUES ('$nama_muzakki', '$kategori', '$hak')");

//mengalihkan halaman kembali ke distribusi_warga.php
header("location:distribusi_warga.php");
