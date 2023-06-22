<?php
//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form 
$nama_kategori = $_POST['nama_kategori'];
$jumlah_hak = $_POST['jumlah_hak'];
$id_kategori = $_POST['id_kategori'];

//menginput data ke database 
$update = mysqli_query($koneksi, "UPDATE kategori_mustahik SET nama_kategori='$nama_kategori', jumlah_hak='$jumlah_hak' WHERE id_kategori='$id_kategori'");

//mengalihkan halaman kembali ke mustahik.php
header("location:mustahik.php");
