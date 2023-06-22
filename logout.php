<?php
// Fungsi untuk logout
function logout()
{
    // Memulai session
    session_start();

    // Menghapus semua data session
    session_unset();

    // Menghancurkan session
    session_destroy();

    // Mengalihkan pengguna ke halaman login
    header("Location: index.php");
    exit();
}

// Memeriksa apakah logout telah diminta
if (isset($_GET['logout'])) {
    logout();
}
