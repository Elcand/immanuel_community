<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="../../assets/img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
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

        .navbar-nav {
            flex-direction: column;
        }

        .nav-item {
            margin-bottom: 10px;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler.active {
            background-color: #000000;
            border-radius: 5px;
        }

        .contact-section {
            margin-top: 8rem;
            margin-left: 4rem;
            margin-right: 4rem;
            margin-bottom: 6.5rem;
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
    </style>
    <title>Filadelfia CC - Immanuel Community</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark custom-navbar fixed-top">
        <a class="navbar-brand" href="../../index.php" style="color: white;">
            <img src="../../assets/img/logo.png" width="55" height="55" alt="Logo" class="d-inline-block align-top">
            Immanuel Community
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" style="color: white;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../auth/church.php">Churches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../auth/services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../auth/media.php">Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../auth/contact.php">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="contact-section py-5">

        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="card">
                    <h1 class="mb-3">Filadelfia Community Chruch</h1>
                    <img src="../../assets/img/img_12.png" class="card-img-top" alt="Church Image">
                    <div class="card-body text-center">
                        <h5><i class="fa-solid fa-location-dot"></i> Jl. Padi Raya No.12, Gebangsari, Kec. Genuk, Kota Semarang, Jawa Tengah 50117 <br>Telp : 6582766</h5>
                        <a href="https://maps.app.goo.gl/efWkxLnXXwniiCkz8" target="_blank" class="btn btn-primary" style="background-color: #000000; border: none;">
                            <i class="fa-solid fa-map-marker-alt"></i> Lihat Lokasi
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="text-align: left;">

                <h3 class="mt-5"> IBADAH RAYA - MINGGU </h3>
                <p style="font-size : 1.3rem;">Ibadah I : 06.00 WIB<br>
                    Ibadah II : 09.00 WIB (disertai Live Streaming)<br>
                    Ibadah III : 16.30 WIB</p>
                <hr>

                <h3 class="mt-4"> IBADAH WANITA KEZIA</h3>
                <p style="font-size : 1.3rem;">Setiap Selasa | 18.30 WIB</p>
                <hr>

                <h3 class="mt-4"> DOA MALAM</h3>
                <p style="font-size : 1.3rem;">Setiap Rabu ke-2 & ke-4 | 19.00 WIB </p>
                <hr>

                <h3 class="mt-4"> KOMSEL </h3>
                <p style="font-size : 1.3rem;">Setiap Jumat | 18.30 WIB</p>
                <hr>

                <h3 class="mt-4"> IBADAH YOUTH EL-SHADDAY </h3>
                <p style="font-size : 1.3rem;">Setiap Sabtu | 18.00 WIB di Gereja</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center text-left">
                    <div class="logo">
                        <img src="../../assets/img/logo.png" alt="Logo">
                    </div>
                    <div class="footer-logo">
                        Immanuel Community
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i>Jl. Krakatau Raya No.10, Kec. Semarang Timur, Semarang 50125</p>

                        <p><i class="fas fa-building"></i> yayasan.immanuel.semarang@gmail.com</p>
                        <p><i class="fas fa-phone"></i>(024) 8414207 / 8418978</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright" style="text-align: center; margin-top: 3rem; font-size: 15px;">
            <p>&copy; 2024 <a style="font-weight: bold; text-align:center;">Immanuel Community</a>. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>