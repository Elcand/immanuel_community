<?php
session_start();
if ($_SESSION['level'] != "user") {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        /* Sidebar */
        #sidebar {
            background: #f8f9fa;
            min-height: 100vh;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar-heading {
            font-size: 1.3em;
            font-weight: bold;
            color: #333;
            text-align: center;
            padding: 20px 0;
        }
        .nav-link {
            color: #333;
            font-weight: 500;
            padding: 15px 20px;
            transition: color 0.2s, background-color 0.2s;
        }
        .nav-link:hover,
        .nav-link.active {
            background-color: #3498db;
            color: #fff;
        }
        .nav-link i {
            margin-right: 10px;
        }
        /* Main Content */
        main {
            background-color: #f4f6f9;
            padding: 20px;
            min-height: 100vh;
        }
        h2, h4 {
            color: #333;
        }
        /* Footer */
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">
                    <h4 class="sidebar-heading">User - Immanuel Community</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-info-circle"></i> About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-envelope"></i> Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>Dashboard</h2>
                </div>
                <div class="container">
                    <h4>Welcome, <?php echo $_SESSION['username']; ?>!</h4>
                    <p>You have view-only access to the user dashboard.</p>
                    <p>&copy; 2024, made with <span style="color: #3498db;">&hearts;</span> by Immanuel Community</p>
                    <a href="logout.php" class="btn btn-outline-primary mt-3">Logout</a>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
