<?php
session_start(); // Start the session to access session variables
require '../config/fungsi-users.php';

if(isset($_SESSION['auth'])){
    redirect('http://localhost/back%20up%20project%20costa/mas/index.php','Anda sudah login');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Login Immanuel-Community</title>
</head>
<body>
    <div class="login">
        <img src="assets/img/login-bgg.png" alt="image" class="login__bg">

        <form action="login-code.php" method="POST" class="login__form">
            <img src="../assets/img/logo.png" alt="Logo" class="login__logo">

            <!-- Display alert message -->
            <?php alertMessage(); ?>

            <div class="login__inputs">
                <div class="login__box">
                    <input type="email" placeholder="Masukan Email Anda" name="email" required class="login__input">
                    <i class="ri-mail-fill"></i>
                </div>

                <div class="login__box">
                    <input type="password" placeholder="Masukan Password Anda" name="password" required class="login__input">
                    <i class="ri-lock-2-fill"></i>
                </div>
            </div>

            <div class="login__check">
                <div class="login__check-box">
                    <input type="checkbox" class="login__check-input" id="user-check">
                    <label for="user-check" class="login__check-label">Ingatkan Saya</label>
                </div>
            </div>

            <button type="submit" name="loginBtn" class="login__button">Masuk</button>
        </form>
    </div>
</body>
</html>
