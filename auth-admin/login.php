<!DOCTYPE html>
<html lang="en">

<head>
    <title>Glassmorphism Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: url('assets-admin/img/login.jpg') no-repeat center center fixed;
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
        <h2>Welcome</h2>
        <form method="post">
            <input type="text" class="form-control" placeholder="Enter your email" name="email" required>
            <input type="password" class="form-control" placeholder="Enter password" name="password" required>

            <div class="remember-me">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>

</body>
</html>
