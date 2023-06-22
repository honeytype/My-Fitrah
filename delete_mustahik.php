<?php
//koneksi database
include 'koneksi.php';

//ambil nilai id dari parameter URL
$id_kategori = $_GET['id_kategori'];

//hapus data dari tabel kategori_mustahik berdasarkan id
$delete = mysqli_query($koneksi, "DELETE FROM kategori_mustahik WHERE id_kategori = '$id_kategori'");

//cek apakah penghapusan berhasil dilakukan
if ($delete) {
    //jika berhasil, alihkan pengguna kembali ke halaman awal dan tampilkan pesan sukses
    echo "<script>alert('Data berhasil dihapus');</script>";
    header("location:mustahik.php");
} else {
    //jika gagal, tampilkan pesan error
    echo "Error: " . mysqli_error($koneksi);
}

//tutup koneksi ke database
mysqli_close($koneksi);
