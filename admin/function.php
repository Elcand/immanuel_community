<?php

$koneksi = mysqli_connect("localhost", "root", "", "im");

//login
if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $cekuser = mysqli_query($koneksi, "select * from user where  username='$username' and password='$password'");
    $hitung = mysqli_num_rows($cekuser);


    if ($hitung > 0) {
        //kalau data ditemukan 
        $ambildatarole = mysqli_fetch_array($cekuser);
        $role = $ambildatarole['role'];

        if ($role == 'admin') {
            //kalau dia admin
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'Admin';
            header('location:admin');
        } else {
            //kalau bukan admin
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'User';
            header('location:user');
        }
    } else {
        //kalau gak ketemu

        echo 'Data Tidak Ditemukan';
    }
};
