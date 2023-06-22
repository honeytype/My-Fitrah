<?php
// Periksa apakah parameter keyword ada pada URL
if (isset($_GET['keyword'])) {
    // Tangkap nilai keyword dari URL
    $keyword = $_GET['keyword'];

    // Lakukan proses pencarian berdasarkan keyword
    // Misalnya, query ke database atau proses pencarian pada data

    // Contoh: Query ke database
    $sql = "SELECT * FROM muzakki WHERE nama_muzakki LIKE '%$keyword%'";
    // Eksekusi query dan ambil hasilnya

    // Tampilkan hasil pencarian
    // Misalnya, dengan melakukan iterasi pada hasil query
    // dan menampilkan data yang relevan
    while ($row = mysqli_fetch_assoc($result)) {
        // Tampilkan data yang relevan
        echo $row['nama_kolom'];
        echo $row['nama_kolom_lainnya'];
        // ...
    }
}
