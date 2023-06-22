<?php
//koneksi database
include 'koneksi.php';

//ambil nilai id dari parameter URL
$id_zakat = $_GET['id_zakat'];

//hapus data dari tabel mustahik_warga berdasarkan id
$delete = mysqli_query($koneksi, "DELETE FROM bayar_zakat WHERE id_zakat = '$id_zakat'");

//cek apakah penghapusan berhasil dilakukan
if ($delete) {
    //jika berhasil, alihkan pengguna kembali ke halaman awal
    header("location:data_pengumpulan.php");
} else {
    //jika gagal, tampilkan pesan error
    echo "Error: " . mysqli_error($koneksi);
}

//tutup koneksi ke database
mysqli_close($koneksi);
