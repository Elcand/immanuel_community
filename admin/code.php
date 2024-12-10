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

if(isset($_POST['saveSetting']))
{
    $judul = validate($_POST['judul']);
    $deskripsi = validate($_POST['deskripsi']);

    $judul_gereja = validate($_POST['judul_gereja']);
    $deskripsi_gereja = validate($_POST['deskripsi_gereja']);

    $judul_services = validate($_POST['judul_services']);
    $deskripsi_services = validate($_POST['deskripsi_services']);

    $judul_media = validate($_POST['judul_media']);
    $slug = validate($_POST['slug']);

    $judul_contact = validate($_POST['judul_contact']);
    $adderss = validate($_POST['adderss']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    
    $settingId = validate($_POST['settingId']);

    if($settingId == 'insert')
    {
        $query = "INSERT INTO settings"
    }
}

?>