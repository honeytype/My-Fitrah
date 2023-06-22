<?php
//koneksi database
include 'koneksi.php';

//ambil nilai id dari parameter URL
$id_mustahiklainnya = $_GET['id_mustahiklainnya'];

//hapus data dari tabel mustahik_warga berdasarkan id
$delete = mysqli_query($koneksi, "DELETE FROM mustahik_lainnya WHERE id_mustahiklainnya = '$id_mustahiklainnya'");

//cek apakah penghapusan berhasil dilakukan
if ($delete) {
    //jika berhasil, alihkan pengguna kembali ke halaman awal
    header("location:distribusi_lainnya.php");
} else {
    //jika gagal, tampilkan pesan error
    echo "Error: " . mysqli_error($koneksi);
}

//tutup koneksi ke database
mysqli_close($koneksi);
