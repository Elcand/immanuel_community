<?php
if ($_FILES['file']['name']) {
    if (!$_FILES['file']['error']) {
        $name = md5(rand(100, 200)); // Nama unik untuk file
        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ekstensi file
        $filename = $name . '.' . $ext;

        // Validasi tipe file
        $allowed_types = ['mp4', 'mov', 'avi', 'mkv']; // Tipe file video yang diizinkan
        if (!in_array(strtolower($ext), $allowed_types)) {
            die('Tipe file tidak diperbolehkan. Hanya MP4, MOV, AVI, atau MKV yang diperbolehkan.');
        }

        // Validasi ukuran file (contoh: maksimum 50MB)
        $max_size = 50 * 1024 * 1024; // 50MB
        if ($_FILES['file']['size'] > $max_size) {
            die('Ukuran file terlalu besar. Maksimum 50MB.');
        }

        // Lokasi folder penyimpanan
        $destination = '../video/' . $filename; // Folder untuk menyimpan video
        $location = $_FILES["file"]["tmp_name"]; // Lokasi file sementara

        if (move_uploaded_file($location, $destination)) {
            // Kembalikan URL video yang berhasil diunggah
            echo '../video/' . $filename;
        } else {
            echo 'Terjadi kesalahan saat mengunggah file.';
        }
    } else {
        echo 'Terjadi kesalahan: ' . $_FILES['file']['error'];
    }
}
