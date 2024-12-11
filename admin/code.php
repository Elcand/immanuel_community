<?php
session_start();
require '../config/fungsi-users.php';

// Add User (Create)
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
            // User successfully created, no alert set
            header('Location: users.php');
            exit();
        } else {
            // Error during creation, no alert set
            header('Location: users-buat.php');
            exit();
        }
    } else {
        // Missing required fields, no alert set
        header('Location: users-buat.php');
        exit();
    }
}

// Edit User (Update)
if (isset($_POST['updateUser'])) {
    $userId = validate($koneksi, $_POST['id']);
    $name = validate($koneksi, $_POST['name']);
    $phone = validate($koneksi, $_POST['phone']);
    $email = validate($koneksi, $_POST['email']);
    $password = validate($koneksi, $_POST['password']);
    $role = validate($koneksi, $_POST['role']);
    $is_ban = isset($_POST['is_ban']) ? 1 : 0;

    if ($userId && $name && $phone && $email && $role) {
        // Only update the password if it's not empty
        $passwordQuery = $password ? ", password = '$password'" : '';

        $query = "UPDATE users 
                  SET name = '$name', phone = '$phone', email = '$email', role = '$role', is_ban = '$is_ban' $passwordQuery
                  WHERE id = '$userId'";

        $result = mysqli_query($koneksi, $query);

        if ($result) {
            // User successfully updated, no alert set
            header('Location: users.php');
            exit();
        } else {
            // Error during update, no alert set
            header('Location: users.php');
            exit();
        }
    } else {
        // Missing required fields, no alert set
        header('Location: users.php');
        exit();
    }
}

if (isset($_POST['saveSetting'])) {
    // Validasi data input
    $judul = validate($koneksi, $_POST['judul']);
    $deskripsi = validate($koneksi, $_POST['deskripsi']);
    $judul_gereja = validate($koneksi, $_POST['judul_gereja']);
    $deskripsi_gereja = validate($koneksi, $_POST['deskripsi_gereja']);
    $judul_services = validate($koneksi, $_POST['judul_services']);
    $deskripsi_services = validate($koneksi, $_POST['deskripsi_services']);
    $judul_media = validate($koneksi, $_POST['judul_media']);
    $slug = validate($koneksi, $_POST['slug']);
    $judul_contact = validate($koneksi, $_POST['judul_contact']);
    $adderss = validate($koneksi, $_POST['adderss']); // Typo diperbaiki
    $email = validate($koneksi, $_POST['email']);
    $phone = validate($koneksi, $_POST['phone']);
    $settingId = validate($koneksi, $_POST['settingId']);

    if ($settingId == 'insert') {
        // Query untuk insert data ke database
        $query = "INSERT INTO settings (
            judul, deskripsi, judul_gereja, deskripsi_gereja, judul_services, deskripsi_services, judul_media, slug, judul_contact, adderss, email, phone
        ) VALUES (
            '$judul', '$deskripsi', '$judul_gereja', '$deskripsi_gereja', '$judul_services', '$deskripsi_services', '$judul_media', '$slug', '$judul_contact', '$adderss', '$email', '$phone'
        )";

        $result = mysqli_query($koneksi, $query);

    } elseif (is_numeric($settingId)) {
        // Query untuk update data ke database jika settingId valid
        $query = "UPDATE settings SET 
            judul='$judul', 
            deskripsi='$deskripsi', 
            judul_gereja='$judul_gereja', 
            deskripsi_gereja='$deskripsi_gereja', 
            judul_services='$judul_services', 
            deskripsi_services='$deskripsi_services', 
            judul_media='$judul_media', 
            slug='$slug', 
            judul_contact='$judul_contact', 
            adderss='$adderss', 
            email='$email', 
            phone='$phone' 
            WHERE id='$settingId'";

        $result = mysqli_query($koneksi, $query);
    } else {
        // If settingId is not valid
        redirect('settings.php', 'ID Setting Tidak Valid');
        exit();
    }

    // Error handling untuk query
    if ($result) {
        header("Location: settings.php?status=success&message=Simpan+Setting+Berhasil");
        exit;
    } else {
        header("Location: settings.php?status=error&message=Terjadi+Kesalahan");
        exit;
    }
}


?>