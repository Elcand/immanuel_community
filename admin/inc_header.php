<?php
include("../inc/db.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Immanuel Community</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

    <link href="../css/summernote-image-list.min.css">
    <script src="../js/summernote-image-list.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    

<style>
    .image-list-content .col-lg-3 { width: 100% ;}
    .image-list-content img { float:left; width: 20% }
    .image-list-content p { float: left; padding-left: 20px;}
    .image-list-item { padding: 10px 0px 10px 0px;}

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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="halaman.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Churches</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Media
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Contact us
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="users.php">
                                Pengguna
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Logout</a>
                        </li>
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

    <main>
        