<?php
session_start(); // Mulai sesi

$koneksi = mysqli_connect("localhost", "root", "", "im");

//login
if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    // Gunakan prepared statement untuk keamanan
    $stmt = $koneksi->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $ambildatarole = $result->fetch_assoc();
        
        // Verifikasi password
        if (password_verify($password, $ambildatarole['password'])) {
            $role = $ambildatarole['role'];

            // Set session berdasarkan role
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = $role === 'admin' ? 'Admin' : 'auth';
            header('location:../' . ($_SESSION['role'] === 'Admin' ? 'admin' : 'auth'));
            exit();
        } else {
            echo 'Data Tidak Ditemukan';
        }
    } else {
        echo 'Data Tidak Ditemukan';
    }

    $stmt->close();
}
