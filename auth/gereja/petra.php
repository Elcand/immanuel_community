<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="../../assets/img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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

        .navbar-nav .nav-item.active .nav-link {
            color: #fff !important;
            /* Warna teks */
            background-color: #222;
            /* Warna latar belakang */
            border-radius: 5px;
            /* Radius untuk tampilan melengkung */
            padding: 0.5rem 1rem;
            /* Padding agar terlihat lebih rapi */
            font-weight: bold;
        }

        /* Transisi untuk efek halus */
        .navbar-nav .nav-item .nav-link {
            transition: all 0.3s ease-in-out;
        }

        /* Hover tetap berfungsi */
        .navbar-nav .nav-item .nav-link:hover {
            color: #e3e3e3 !important;
            background-color: #333;
        }

        .contact-section {
            margin-top: 8rem;
            margin-left: 4rem;
            margin-right: 4rem;
            margin-bottom: 6.5rem;
        }

        .card {
            margin-left: auto;
            margin-right: 3rem;
            height: auto;
            max-width: 80%;
        }

        .card h1 {
            font-size: 1.8rem;
        }

        .card-body h5 {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .card img {
            max-width: 100%;
            height: auto;
        }

        /* QR Section */
        .qr-section {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 3rem;
            padding: 20px;
            flex-wrap: wrap;
            justify-content: space-around;
            /* Mengatur QR Code agar rata tengah dan responsif */
        }

        .qr-item {
            text-align: center;
            background-color: #f8f9fa;
            /* Latar belakang terang untuk QR Code */
            padding: 20px;
            border-radius: 10px;
            /* Sudut melengkung */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Bayangan halus */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Animasi transformasi */
            max-width: 180px;
            width: 100%;
            margin: 10px;
        }

        .qr-item:hover {
            transform: scale(1.05);
            /* Zoom in saat hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            /* Bayangan lebih tajam saat hover */
        }

        .qr-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            /* Sudut melengkung pada gambar */
            margin-bottom: 15px;
        }

        .qr-item p {
            font-size: 1.1rem;
            font-weight: bold;
            color: #333;
            /* Warna teks yang lebih gelap */
            margin-top: 10px;
            text-transform: uppercase;
            /* Mengubah teks jadi kapital semua */
            letter-spacing: 1px;
            /* Spasi antar huruf */
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

        .contact-info p {
            font-size: 18px;
            /* Jarak antar baris */
            margin-bottom: 1rem;
            /* Jarak antar paragraf */
            display: flex;
            /* Gunakan flex untuk mengatur ikon dan teks */
            align-items: center;
            /* Vertikal rata tengah */
        }

        .contact-info i {
            font-size: 1.5rem;
            /* Ukuran ikon */
            margin-right: 10px;
            /* Jarak antara ikon dan teks */
        }

        /* Media Queries */

        @media (max-width: 576px) {
            .contact-section {
                padding: 20px 10px;
            }

            .card h1 {
                font-size: 1.5rem;
            }

            .card-body h5 {
                font-size: 1rem;
            }

            h3 {
                font-size: 1.2rem;
            }

            p {
                font-size: 1rem;
            }
        }

        @media (max-width: 768px) {
            .contact-section {
                padding: 25px 15px;
            }

            .card h1 {
                font-size: 1.6rem;
            }

            h3 {
                font-size: 1.3rem;
            }

            p {
                font-size: 1.1rem;
            }
        }

        @media (min-width: 992px) {
            .card h1 {
                font-size: 2rem;
            }

            h3 {
                font-size: 1.5rem;
            }

            p {
                font-size: 1.3rem;
            }

            .qr-item img {
                width: 120px;
            }
        }
    </style>
    <title>Petra CC - Immanuel Community</title>
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
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../../index.php">Home</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'church.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../../auth/church.php">Churches</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../../auth/services.php">Services</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'media.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../../auth/media.php">Media</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../../auth/contact.php">Contact us</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="login.php"><i class="bi bi-person-lock"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content Section -->
    <section class="contact-section py-5">
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="card">
                    <h1 class="mb-3">Petra Community Church</h1>
                    <img src="../../assets/img/img_12.png" class="card-img-top" alt="Church Image">
                    <div class="card-body text-center">
                        <h5><i class="fa-solid fa-location-dot"></i> Jl. MT. Haryono No.844-846, Karangturi, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50124</h5>
                        <a href="https://maps.app.goo.gl/2pwmdW6NC2WxQSN49" target="_blank" class="btn btn-primary" style="background-color: #000000; border: none;">
                            Lihat Lokasi
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3>IBADAH RAYA - MINGGU</h3>
                <p>Ibadah I : 07.00 WIB<br>Ibadah II : 09.30 WIB (Live Streaming)<br>Ibadah III : 17.00 WIB</p>
                <hr>
                <h3>DOA PAGI</h3>
                <p>Setiap Selasa, Kamis, Sabtu | 04.30 WIB di Youtube Petra Media</p>
                <hr>
                <h3>IBADAH GEN-U</h3>
                <p>Setiap Sabtu | 17.00 WIB di Gedung Utama</p>
                <hr>
                <h3>IBADAH SEKOLAH MINGGU</h3>
                <p>Setiap Minggu di lantai 2 | 07.00 WIB, 09.30 WIB, & 17.00 WIB</p>
            </div>
        </div>
        <div class="qr-section">
            <div class="qr-item">
                <img src="../../assets/kolekte1/k1-petra.jpg" alt="QR Code 1">
                <p>Kolekte 01</p>
            </div>
            <div class="qr-item">
                <img src="../../assets/kolekte2/k2-petra.jpg" alt="QR Code 2">
                <p>Kolekte 02</p>
            </div>
            <div class="qr-item">
                <img src="../../assets/perpuluhan/p-petra.jpg" alt="QR Code 3">
                <p>Perpuluhan</p>
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