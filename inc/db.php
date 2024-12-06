<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'imanuelcomunity';

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Gagal terkoneksi. Error: " . mysqli_connect_error() . " | Error Code: " . mysqli_connect_errno());
}
?>
