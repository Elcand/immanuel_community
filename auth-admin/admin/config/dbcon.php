<?php

define('DB_SERVE', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_DATABASE', "gereja");

$conn = mysqli_connect(DB_SERVE, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Periksa koneksi
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully"; // Tambahkan pesan sukses untuk konfirmasi
}

// Tutup koneksi jika tidak diperlukan lagi
mysqli_close($conn);
?>
