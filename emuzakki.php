<?php
//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form 
$nama_muzakki = $_POST['nama_muzakki'];
$jumlah_tanggungan = $_POST['jumlah_tanggungan'];
$keterangan = $_POST['keterangan'];
$id_muzakki = $_POST['id_muzakki'];

//menginput data ke database 
$update = mysqli_query($koneksi, "UPDATE muzakki SET nama_muzakki='$nama_muzakki', jumlah_tanggungan='$jumlah_tanggungan', keterangan='$keterangan' WHERE id_muzakki='$id_muzakki'");

//mengalihkan halaman kembali ke muzakki.php
header("location:muzakki.php");
