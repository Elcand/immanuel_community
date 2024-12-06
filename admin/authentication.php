<?php
session_start();
require '../config/fungsi-users.php'; // Pastikan fungsi tersedia

if (isset($_SESSION['auth'])) {
    if (isset($_SESSION['loggedInUserRole'])) {
        $role = validate($koneksi, $_SESSION['loggedInUserRole']);
        $email = validate($koneksi, $_SESSION['loggedInUser']['email']);

        $query = "SELECT * FROM users WHERE email='$email' AND role='$role' LIMIT 1";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            if (mysqli_num_rows($result) == 0) {
                logoutSession();
                redirect('login.php', 'Akses ditolak');
            }
        } else {
            logoutSession();
            redirect('login.php', 'Ada yang salah');
        }
    }
} else {
    redirect('login.php', 'Login untuk masuk');
}
?>
