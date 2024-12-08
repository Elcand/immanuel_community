<?php
session_start();
require '../inc/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $title = isset($_POST['title']) ? $_POST['title'] : null;
    $message = isset($_POST['message']) ? $_POST['message'] : null;
    $created_at = isset($_POST['created_at']) ? $_POST['created_at'] : null;

    // Validasi data
    if (!$title || !$message || !$created_at) {
        $_SESSION['error'] = "Semua field harus diisi.";
        header("Location: add_notification.php");
        exit();
    }

    try {
        // Query untuk menyimpan data
        $query = "INSERT INTO notifications (title, message, created_at) VALUES (?, ?, ?)";
        $stmt = $koneksi->prepare($query);
        $stmt->bind_param("sss", $title, $message, $created_at);

        if ($stmt->execute()) {
            $_SESSION['success'] = "Notifikasi berhasil disimpan.";
        } else {
            $_SESSION['error'] = "Gagal menyimpan notifikasi.";
        }

        $stmt->close();
    } catch (Exception $e) {
        $_SESSION['error'] = "Terjadi kesalahan: " . $e->getMessage();
    }

    // Redirect kembali ke halaman input
    header("Location: add_notification.php");
    exit();
}
