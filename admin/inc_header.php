<?php
include("../inc/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Immanuel Community</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <style>
        .notification-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: red;
            color: white;
            border-radius: 50%;
            font-size: 0.8rem;
            padding: 5px 8px;
        }
    </style>
</head>

<body class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="halaman.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Churches</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Media</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-bell"></i>
                                <span id="notification-count" class="notification-badge d-none">0</span>
                            </a>
                            <ul id="notification-list" class="dropdown-menu dropdown-menu-end">
                                <li class="dropdown-item text-muted">Tidak Ada Notifikasi Terbaru</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            function fetchNotifications() {
                $.ajax({
                    url: 'get_notifications.php',
                    method: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        let notificationList = $('#notification-list');
                        notificationList.empty();

                        if (data.length > 0) {
                            $('#notification-count').removeClass('d-none').text(data.length);
                            data.forEach(notification => {
                                notificationList.append(`
                                    <li class="dropdown-item">
                                        <strong>${notification.title}</strong>
                                        <p>${notification.message}</p>
                                    </li>
                                `);
                            });
                        } else {
                            $('#notification-count').addClass('d-none');
                            notificationList.append('<li class="dropdown-item text-muted">Tidak Ada Notifikasi Terbaru</li>');
                        }
                    },
                    error: function (error) {
                        console.error('Error fetching notifications:', error);
                    }
                });
            }

            // Fetch notifications every 5 seconds
            setInterval(fetchNotifications, 5000);
            fetchNotifications();
        });
    </script>
</body>

</html>
