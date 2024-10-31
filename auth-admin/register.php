<!DOCTYPE html>
<html lang="en">
<head>
    <title>Immanuel Community|Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: url('../assets/img/login.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            overflow: hidden;
        }
        .register-container {
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
        .register-container h2 {
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
        .btn-register {
            background-color: #04AA6D;
            color: white;
            font-weight: bold;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .btn-register:hover {
            background-color: #037a4f;
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
    <div class="register-container">
        <h2>Register</h2>
        <?php 
        if (isset($_GET['message']) && $_GET['message'] == "error") {
            echo "<div class='alert alert-danger'>Registration failed! Please try again.</div>";
        } elseif (isset($_GET['message']) && $_GET['message'] == "success") {
            echo "<div class='alert alert-success'>Registration successful! You can now <a href='login.php'>login here</a>.</div>";
        }
        ?>
        <form action="proses_register.php" method="post">
            <input type="text" class="form-control" name="username" placeholder="Username" required>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <select class="form-control" name="level" required>
                <option value="" disabled selected>Select your level</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <button type="submit" class="btn-register">Register</button>
            <p class="signup-link">Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</body>
</html>
