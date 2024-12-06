<?php
session_start(); // Mulai sesi

require '../config/fungsi-users.php'; // Pastikan file ini memiliki fungsi logoutSession() dan redirect()

if (isset($_SESSION['auth'])) {
    logoutSession(); // Hapus sesi
    redirect('login.php', 'Sukses untuk Keluar'); // Arahkan ke halaman login dengan pesan
} else {
    redirect('login.php', 'Anda belum login'); // Jika sesi tidak aktif, arahkan langsung ke login
}
?>
