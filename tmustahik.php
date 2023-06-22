<?php
//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form 
$nama_kategori = $_POST['nama_kategori'];
$jumlah_hak = $_POST['jumlah_hak'];


//menginput data ke database 
$insert=mysqli_query($koneksi, "insert into kategori_mustahik (nama_kategori, jumlah_hak) values ('$nama_kategori', '$jumlah_hak')");

//mengalihkan halaman kembali ke mustahik.php
header("location:mustahik.php")
?>