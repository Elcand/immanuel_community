<?php
require '../config/fungsi-users.php';

session_start();

if (isset($_POST['loginBtn'])) {
    $emailInput = validate($koneksi, $_POST['email']);
    $passwordInput = validate($koneksi, $_POST['password']);

    // Sanitize inputs
    $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
    $password = filter_var($passwordInput, FILTER_SANITIZE_STRING);

    if (!empty($email) && !empty($password)) {
        $query = "SELECT * FROM users WHERE email = ? LIMIT 1";
        $stmt = mysqli_prepare($koneksi, $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            // Placeholder: Gunakan password_verify jika password sudah di-hash
            if ($row['password'] === $password) {
                if ($row['is_ban'] == 1) {
                    redirect('login.php', 'Akun anda diBanned. Silahkan hubungi Verifikator');
                }

                session_regenerate_id(true);

                $_SESSION['auth'] = true;
                $_SESSION['loggedInUserRole'] = $row['role'];
                $_SESSION['loggedInUser'] = [
                    'name' => $row['name'],
                    'email' => $row['email'],
                ];

                // Hanya izinkan role tertentu untuk login
                $allowedRoles = ['verifikator', 'editor', 'admin'];
                if (in_array($row['role'], $allowedRoles)) {
                    redirect('halaman.php', 'Berhasil Masuk');
                } else {
                    redirect('login.php', 'Anda tidak memiliki akses ke sistem ini.');
                }
            } else {
                redirect('login.php', 'Email atau Password Salah');
            }
        } else {
            redirect('login.php', 'Email atau Password Salah');
        }
    } else {
        redirect('login.php', 'Semua Bidang bersifat wajib diisi');
    }
}
?>
