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

        select,
        option {
            padding: 1rem;
            border-radius: 0.5rem;
            font-size: 1.5rem;
            background-color: transparent;
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
                width: 80%;
                height: 400px;
            }

            select {
                font-size: 1rem;
                padding: 0.75rem;
            }
        }

        @media (max-width: 576px) {
            .custom-navbar .nav-link {
                margin: 0.25rem 0;
                font-size: 1rem;
            }

            .footer .footer-logo {
                font-size: 1.2rem;
            }

            .footer .logo img {
                width: 40px;
                height: 40px;
            }
        }
    </style>
    <title>Churches - Immanuel Community</title>
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

    <section class="church-select-section" style="min-height: 100vh; background-color: #FFFFFFFF; margin-bottom: 6rem;">
        <div id="churchCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/img/img_1.png" class="d-block w-100" alt="Church Image 1">
                </div>
            </div>
        </div>

        <div class="container text-center">
            <h1 class="mb-4">Daftar Gereja Immanuel community</h1>

            <form method="GET" action="" id="churchForm">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-6">
                        <select name="church" class="form-select form-select-lg mb-4" onchange="this.form.submit()" style="color: #ffffff; background: #191919; border: none;">
                            <option value="" selected>Pilih Gereja</option>
                            <option value="petra" <?php if (isset($_GET['church']) && $_GET['church'] == 'petra') echo 'selected'; ?>>Petra Community Church</option>
                            <option value="efrata" <?php if (isset($_GET['church']) && $_GET['church'] == 'efrata') echo 'selected'; ?>>Efrata Community Church</option>
                            <option value="hermon" <?php if (isset($_GET['church']) && $_GET['church'] == 'hermon') echo 'selected'; ?>>Hermon Community Church</option>
                            <option value="eben-haezer" <?php if (isset($_GET['church']) && $_GET['church'] == 'eben-haezer') echo 'selected'; ?>>Eben Haezer Community Church</option>
                            <option value="mahanaim" <?php if (isset($_GET['church']) && $_GET['church'] == 'mahanaim') echo 'selected'; ?>>Mahanaim Community Church</option>
                            <option value="filadelfia" <?php if (isset($_GET['church']) && $_GET['church'] == 'filadelfia') echo 'selected'; ?>>Filadelfia Community Church</option>
                            <option value="karmel" <?php if (isset($_GET['church']) && $_GET['church'] == 'karmel') echo 'selected'; ?>>Karmel Community Church</option>
                            <option value="sinai" <?php if (isset($_GET['church']) && $_GET['church'] == 'sinai') echo 'selected'; ?>>Sinai Community Church</option>
                            <option value="kana" <?php if (isset($_GET['church']) && $_GET['church'] == 'kana') echo 'selected'; ?>>Kana Community Church</option>
                            <option value="getsemani" <?php if (isset($_GET['church']) && $_GET['church'] == 'getsemani') echo 'selected'; ?>>Getsemani Community Church</option>
                            <option value="sion" <?php if (isset($_GET['church']) && $_GET['church'] == 'sion') echo 'selected'; ?>>Sion Community Church</option>
                        </select>
                    </div>
                </div>
            </form>

            <div id="churchDetails" class="mt-5">
                <?php
                if (isset($_GET['church']) && !empty($_GET['church'])) {
                    $church = $_GET['church'];

                    if ($church == 'petra') {
                        include "gereja/petra.php";
                    } elseif ($church == 'efrata') {
                        include "gereja/efrata.php";
                    } elseif ($church == 'hermon') {
                        include "gereja/hermon.php";
                    } elseif ($church == 'eben-haezer') {
                        include "gereja/eben-haezer.php";
                    } elseif ($church == 'mahanaim') {
                        include "gereja/mahanaim.php";
                    } elseif ($church == 'filadelfia') {
                        include "gereja/filadelfia.php";
                    } elseif ($church == 'karmel') {
                        include "gereja/karmel.php";
                    } elseif ($church == 'sinai') {
                        include "gereja/sinai.php";
                    } elseif ($church == 'kana') {
                        include "gereja/kana.php";
                    } elseif ($church == 'getsemani') {
                        include "gereja/getsemani.php";
                    } elseif ($church == 'sion') {
                        include "gereja/sion.php";
                    }
                }
                ?>
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
                        <p><i class="fas fa-building"></i> yayasan.immanuel.semarang@gmail.com</p>
                        <p><i class="fas fa-phone"></i>(024) 8414207 / 8418978</p>
                        <p><i class="fas fa-calendar-alt"></i> Hari Ibadah: Minggu, 09:00 AM & 18:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script>
        // Navbar toggler
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