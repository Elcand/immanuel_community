<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
  <link rel="icon" href="assets/img/logo.png">
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

    .home-section {
      position: relative;
      height: calc(120vh - 6rem);
      width: 100vw;
      overflow: hidden;
    }

    .background-video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .welcome-text {
      position: relative;
      z-index: 1;
      color: white;
      text-align: center;
    }

    .text-center {
      text-align: center;
    }

    .text-white {
      color: #ffffff;
    }

    .display-3 {
      font-size: 3rem;
    }

    .display-4 {
      font-size: 2.5rem;
    }

    .lead {
      font-size: 1.25rem;
    }

    .churches-section {
      font-weight: bold;
    }

    .font-weight-bold {
      font-weight: 700;
    }

    .fixed-top {
      z-index: 1030;
    }

    .section-imani {
      position: relative;
      background-image: url('assets/img/pengakuan.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 5rem;
    }

    .section-imani h2 {
      font-size: 3rem;
      font-weight: bold;
      text-align: center;
    }

    .section-imani p {
      font-size: 1.25rem;
      text-align: center;
    }

    .section-imani .btn-opacity {
      display: block;
      margin: 2rem auto;
      background-color: rgba(255, 255, 255, 0.5);
      color: white;
      border: none;
      padding: 0.75rem 2rem;
      font-size: 1.25rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .section-imani .btn-opacity:hover {
      background-color: rgba(255, 255, 255, 0.7);
    }

    .pengakuan-list {
      display: none;
      margin-top: 2rem;
      color: white;
    }

    .pengakuan-list p {
      text-align: left;
      margin-left: 2rem;
    }

    .pengakuan-list ol {
      font-size: 1.25rem;
    }

    .section-lokasi {
      background-color: white;
      color: black;
      padding: 5rem 0;
      text-align: center;
    }

    .section-lokasi h2 {
      font-size: 3rem;
      font-weight: bold;
    }

    .section-lokasi h3 {
      font-size: 2.5rem;
      font-weight: bold;
      margin-top: 1rem;
    }

    .section-lokasi h4 {
      font-size: 2rem;
      font-weight: bold;
      margin-top: 0.5rem;
    }

    .btn-lokasi {
      background-color: black;
      color: white;
      border: none;
      padding: 0.75rem 2rem;
      font-size: 1.25rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 2rem;
    }

    .btn-lokasi:hover {
      background-color: #333;
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

    .footer .contact-info2 {
      margin-top: 2px;
    }

    .footer .contact-info2 p {
      margin-left: 40px;

    }

    .footer .contact-info p {
      margin: 0.25rem 0;
    }

    .footer .contact-info i {
      margin-right: 0.5rem;
    }
  </style>
  <title>Immanuel Community Church</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark custom-navbar fixed-top">
    <a class="navbar-brand" href="index.php" style="color: white;">
      <img src="assets/img/logo.png" width="55" height="55" alt="Logo" class="d-inline-block align-top">
      Immanuel Community
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars" style="color: white;"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="auth/church.php">Churches</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="auth/services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="auth/media.php">Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="auth/contact.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Admin</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="w-100 text-center mt-2">
    <p class="text-white font-weight-bold mb-0" style="font-size: 0.9rem;">
      Eben Haezer . Efrata . Filadelfia . Getsmani . Hermon . Kana . Karmel . Mahanaim . Petra . Sinai . Sion
    </p>
  </div>


  <?php include "auth/home.php"; ?>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex align-items-center text-left">
          <div class="logo">
            <img src="assets/img/logo.png" alt="Logo">
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

  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  <script>
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('#navbarNav');

    navbarToggler.addEventListener('click', function() {

      this.classList.toggle('active');


      if (navbarCollapse.classList.contains('show')) {
        navbarCollapse.classList.remove('show');
      } else {
        navbarCollapse.classList.add('show');
      }
    });
  </script>

</body>


</html>