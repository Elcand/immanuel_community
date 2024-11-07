<?php

require 'config/function.php';

if(isset($_SESSION['auth'])){
    redirect('index.php','You are already logged in');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: url('admin/assets-admin/img/loginbg.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            overflow: hidden;
        }

        .login-container {
            width: 400px;
            padding: 40px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            text-align: center;
            color: #fff;
        }

        .alert-message {
            background-color: rgba(255, 0, 0, 0.8);
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 0.9em;
            text-align: center;
            display: block;
            /* Display the alert if needed */
        }

        .login-container h2 {
            font-size: 1.8em;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 5px;
            color: #fff;
            margin-bottom: 15px;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        .form-control::placeholder {
            color: #e0e0e0;
        }

        .btn-login {
            background-color: #04AA6D;
            color: white;
            font-weight: bold;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #037a4f;
        }

        .remember-me {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9em;
            color: #ddd;
        }

        .remember-me a {
            color: #04AA6D;
            text-decoration: none;
        }

        .remember-me a:hover {
            text-decoration: underline;
        }

        .signup-link {
            color: #04AA6D;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }

        .signup-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <!-- Alert Message -->
        <?php
        $alertMessage = alertMessage();
        if (!empty($alertMessage)): ?>
            <div class="alert-message">
                <?= $alertMessage; ?>
            </div>
        <?php endif; ?>

        <h2>Login</h2>
        <form action="login-code.php" method="POST">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>

            <div class="remember-me">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
            </div>

            <button type="submit" name="loginBtn" class="btn-login">Login</button>

        </form>
    </div>

</body>

</html>