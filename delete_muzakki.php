<?php
//koneksi database
include 'koneksi.php';

//ambil nilai id dari parameter URL
$id_muzakki = $_GET['id_muzakki'];

//hapus data dari tabel mustahik_warga berdasarkan id
$delete = mysqli_query($koneksi, "DELETE FROM muzakki WHERE id_muzakki = '$id_muzakki'");

//cek apakah penghapusan berhasil dilakukan
if ($delete) {
    //jika berhasil, alihkan pengguna kembali ke halaman awal
    header("location:muzakki.php");
} else {
    //jika gagal, tampilkan pesan error
    echo "Error: " . mysqli_error($koneksi);
}

//tutup koneksi ke database
mysqli_close($koneksi);
