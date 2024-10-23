<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="icon" href="../assets/img/logo.png">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
        }

        .custom-navbar {
            height: 6rem;
            background-color: #000000 !important;
        }

        .custom-navbar .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: bold;
            font-size: 20px;
        }

        .custom-navbar .navbar-brand img {
            margin-right: 0.5rem;
        }

        .navbar-collapse {
            background-color: #000000;
            padding: 10px;
        }

        .custom-navbar .nav-link {
            color: #ffffff !important;
            margin: 0rem 2rem;
            font-weight: bold;
        }

        .custom-navbar .nav-link:hover {
            color: #dddddd !important;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler.active {
            background-color: #000000;
            border-radius: 5px;
        }

        .contact-info p {
            font-size: 1.2rem;
        }

        .contact-info .mb-3 {
            text-decoration: none;
            font-size: 27px;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .footer {
            background-color: #000000;
            color: #ffffff;
            padding: 3rem 0;
        }

        .footer .logo img {
            width: 50px;
            height: 50px;
            margin-right: 1rem;
        }

        .footer .footer-logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer .contact-info {
            margin-top: 1rem;
        }

        .footer .contact-info p {
            margin: 0.25rem 0;
        }

        .footer .contact-info i {
            margin-right: 0.5rem;
        }

        @media (max-width: 576px) {
            .custom-navbar .nav-link {
                margin: 0.5rem 0;
            }

            .custom-navbar .navbar-brand {
                font-size: 1rem;
            }

            .navbar-nav {
                flex-direction: column;
            }

            .contact-info p {
                font-size: 1rem;
                margin-top: 3%;
            }

            .contact-info a {
                font-size: 1rem;
                margin-top: 2%;
            }


            .map-container {
                height: 300px;
                width: 80%;
                max-width: 500px;
                border: 2px solid #ddd;
                border-radius: 8px;
                margin: 0 auto;
            }

            .map-container iframe {
                height: 300px;
            }

            .footer .footer-logo {
                font-size: 1rem;
                margin-bottom: 1rem;
            }

            .footer .logo img {
                width: 40px;
                height: 40px;
            }

            .footer .contact-info {
                text-align: center;
            }
        }


        @media (max-width: 768px) {
            .navbar-collapse {
                padding: 0;
            }

            .custom-navbar {
                height: auto;
                padding: 1rem;
            }

            .custom-navbar .nav-link {
                margin: 0.5rem 0;
            }

            .footer {
                text-align: left;
            }

            .carousel-inner img {
                width: 100%;
                height: auto;
            }

            select {
                font-size: 1rem;
                padding: 0.75rem;
            }
        }

        @media (max-width: 768px) {
            .navbar-collapse {
                background-color: #000000;
            }

            .footer {
                padding: 2rem 0;
            }

            .footer .contact-info {
                text-align: left;
            }

            .footer .footer-logo {
                font-size: 1.5rem;

            }

            .footer img {
                width: 50px;
                height: 50px;
            }

            .footer .contact-info p {
                font-size: 1rem;
                margin: 0.75rem 0;
            }
        }
    </style>
    <title>Contact Us - Immanuel Community</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark custom-navbar fixed-top">
        <a class="navbar-brand" href="../index.php" style="color: white;">
            <img src="../assets/img/logo.png" width="55" height="55" alt="Logo" class="d-inline-block align-top">
            Immanuel Community
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" style="color: white;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../auth/church.php">Churches</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../auth/services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../auth/media.php">Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../auth/contact.php">Contact us</a>
        </li>
      </ul>
    </div>
    </nav>

    <section class="contact-section py-5" style="margin-top: 8rem; margin-bottom: 6.5rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2045645768535!2d110.43188482437006!3d-6.985167179047235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708d58cdcc0abd%3A0xb3a1ad95593aaec9!2sKANTOR%20YAYASAN%20IMMANUEL!5e0!3m2!1sid!2sid!4v1726114896729!5m2!1sid!2sid"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h1 class="text-center mb-4">Hubungi Kami</h1>
                    <div class="contact-info text-left">
                        <p class="mb-3">
                            <i class="fas fa-map-marker-alt" style="font-size: 1.5rem;"></i>
                            <a href="https://maps.app.goo.gl/bcAUNkhwGWQ8wxhi6" target="_blank" style="color: #000; margin-left: 10px;">
                                Jl. Krakatau No.10, Karangtempel, Kec. Semarang Tim., Kota Semarang, Jawa Tengah
                            </a>
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-envelope" style="font-size: 1.5rem;"></i>
                            <a href="mailto:yayasan.immanuel.semarang@gmail.com" target="_blank" style="color: #000; margin-left: 10px;">
                                yayasan.immanuel.semarang@gmail.com
                            </a>
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-phone" style="font-size: 1.5rem;"></i>
                            <span style="color: #000; margin-left: 10px;">(024) 8414207 / 84189</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center text-left">
                    <div class="logo">
                        <img src="../assets/img/logo.png" alt="Logo">
                    </div>
                    <div class="footer-logo">
                        Immanuel Community
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i>Jl. Krakatau No.10, Karangtempel, Kec. Semarang Tim., Kota Semarang, Jawa Tengah</p>
                        <p><i class="fas fa-building"></i>yayasan.immanuel.semarang@gmail.com</p>
                        <p><i class="fas fa-phone"></i>(024) 8414207 / 8418978</p>
                        <p><i class="fas fa-calendar-alt"></i> Hari Ibadah: Minggu, 09:00 AM & 18:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script>
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('#navbarNav');

        navbarToggler.addEventListener('click', function() {
            if (navbarCollapse.classList.contains('show')) {
                navbarToggler.classList.remove('active');
            } else {
                navbarToggler.classList.add('active');
            }
        });
    </script>
</body>

</html>