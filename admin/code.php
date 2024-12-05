<?php
session_start();
require '../config/fungsi-users.php';

if (isset($_POST['saveUser'])) {
    $name = validate($koneksi, $_POST['name']);
    $phone = validate($koneksi, $_POST['phone']);
    $email = validate($koneksi, $_POST['email']);
    $password = validate($koneksi, $_POST['password']);
    $role = validate($koneksi, $_POST['role']);
    $is_ban = isset($_POST['is_ban']) ? 1 : 0;

    if ($name && $phone && $email && $password && $role) {
        $query = "INSERT INTO users (name, phone, email, password, role, is_ban) 
                  VALUES ('$name', '$phone', '$email', '$password', '$role', '$is_ban')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            $_SESSION['status'] = 'Pengguna baru berhasil ditambahkan!';
            header('Location: users-buat.php');
            exit();
        } else {
            $_SESSION['status'] = 'Terjadi kesalahan saat menambahkan pengguna.';
            header('Location: users-buat.php');
            exit();
        }
    } else {
        $_SESSION['status'] = 'Harap isi semua bidang yang diperlukan.';
        header('Location: users-buat.php');
        exit();
    }
}
?>
