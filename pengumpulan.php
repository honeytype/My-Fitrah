<?php
include('koneksi.php');

$sudahResult = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_sudah FROM muzakki WHERE status='Sudah Bayar'");
$sudah = mysqli_fetch_assoc($sudahResult)['jumlah_sudah'];

$totalResult = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah_total FROM muzakki");
$total = mysqli_fetch_assoc($totalResult)['jumlah_total'];

$berasResult = mysqli_query($koneksi, "SELECT SUM(bayar_beras) AS total_beras FROM bayar_zakat");
$beras = mysqli_fetch_assoc($berasResult)['total_beras'];

$uangResult = mysqli_query($koneksi, "SELECT SUM(bayar_uang) AS total_uang FROM bayar_zakat");
$uang = mysqli_fetch_assoc($uangResult)['total_uang'];

$muzakki = mysqli_query($koneksi, "SELECT SUM(jumlah_tanggungan) AS total_muzakki FROM muzakki");
$muzakki = mysqli_fetch_assoc($muzakki);
