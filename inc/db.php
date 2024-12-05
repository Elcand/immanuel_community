<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'imanuelcomunity';

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Mengecek apakah koneksi berhasil
if (!$koneksi) {
    die("Gagal terkoneksi. Error: " . mysqli_connect_error() . " | Error Code: " . mysqli_connect_errno());
}
?>
