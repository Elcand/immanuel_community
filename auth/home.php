<section id="home" class="home-section d-flex align-items-center justify-content-center" style="margin-bottom: -50px;">
    <video autoplay muted loop playsinline class="background-video">
        <source src="assets/video/welcome.mp4" type="video/mp4">
    </video>
    <div class="welcome-text text-center">
        <h1 class="display-4 text-white" style="font-size: 100px; font-weight: bold; font-family: alex brushS"></h1>
    </div>
</section>

<section id="churches" class="churches-section py-5" style="padding-top: 30px;">
    <div class="container">
        <h2 class="text-center mb-4 display-3 font-weight-bold">Immanuel Community </h2>
        <p class="text-center mb-4" style="font-weight: normal; font-size: 16px">
            Immanuel Community Church adalah sebuah gereja yang berfokus pada komunitas Kristen, dengan tujuan untuk membangun iman dan memberikan pelayanan bagi jemaatnya. Gereja ini berkomitmen untuk menciptakan lingkungan yang mendukung pengembangan spiritual melalui ibadah, pengajaran Alkitab, dan kegiatan pelayanan sosial.
            Gereja ini juga mungkin menekankan pentingnya komunitas dalam kehidupan iman, mendorong anggotanya untuk berpartisipasi dalam kelompok kecil, pelayanan, serta kegiatan sosial yang bertujuan untuk mendukung satu sama lain. Fokusnya adalah pada penguatan hubungan antara jemaat dengan Tuhan serta dengan sesama dalam konteks kehidupan sehari-hari.
        </p>
        <div class="row mt-5">
            <div class="col-md-6">
                <h3 class="display-4 text-center font-weight-bold">Visi</h3>
                <p class="text-left" style="font-weight: normal; font-size: 16px">
                    Membangun Gereja Menuju Kepenuhan Kristus </p>
            </div>
            <div class="col-md-6">
                <h3 class="display-4 text-center font-weight-bold">Misi</h3>
                <p class="text-left" style="font-weight: normal; font-size: 16px">

                </p>
            </div>
        </div>
    </div>
</section>
<section class="section-imani" id="pengakuan-iman">
    <div class="container">
        <h2 style="margin-bottom: 5%;">Pengakuan Iman</h2>
        <p class="mb-4"></p>
        <button class="btn-opacity" id="toggleButton" style="border-radius: 1rem;"><a href="auth/iman.php" style="text-decoration: none; color : black;">Lihat Selengkapnya</a></button>
</section>
<section class="section-lokasi" id="lokasi">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsMjkj0lMJPs5Mm2YXVQLr1IO0SgFMx3k"></script>
    <style>
        #map-container {
            display: flex;
            justify-content: center;
            margin: 20px;
        }

        #map {
            height: 500px;
            width: 80%;
            max-width: 800px;
            border: 2px solid #ddd;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            #map {
                height: 300px;
                width: 80%;
                max-width: 500px;
                border: 2px solid #ddd;
                border-radius: 8px;
            }

            .background-video {
                height: 600px;
                width: 100%;
            }

            #home {
                margin-bottom: -20px;
                /* Sesuaikan untuk tampilan kecil */
            }

            #churches-section {
                padding-top: 20px;
                /* Sesuaikan untuk tampilan kecil */
            }
        }
    </style>

    <h1 style="font-weight:bold;">Lokasi Gereja Immanuel Community</h1>
    <div id="map-container">
        <div id="map"></div>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-6.990257, 110.423727], 12);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Daftar lokasi dengan lat dan lng
        var locations = [{
                lat: -6.970247146229344,
                lng: 110.44178310828214,
                link: 'https://maps.app.goo.gl/Xf7STuCnga6YZRx6A',
                name: 'Efrata CC'
            },
            {
                lat: -6.993138359670686,
                lng: 110.43228676780805,
                link: 'https://maps.app.goo.gl/FEqdSm7H6g5BmpgcA',
                name: 'Petra CC'
            },
            {
                lat: -6.961177897599155,
                lng: 110.40521525060964,
                link: 'https://maps.app.goo.gl/Q3v55r6F4tnQBv5v6',
                name: 'Hermon CC'
            },
            {
                lat: -7.013528470462205,
                lng: 110.45066974875718,
                link: 'https://maps.app.goo.gl/VgSjAnqeU5MFbWr99',
                name: 'Eben Haezer CC'
            },
            {
                lat: -6.963180049320967,
                lng: 110.46595412177354,
                link: 'https://maps.app.goo.gl/b58m5ttcCXSiCygM9',
                name: 'Filadelfia CC'
            },
            {
                lat: -7.033071986564515,
                lng: 110.42206576949592,
                link: 'https://maps.app.goo.gl/XoNWZ2FcdzYyLPb46',
                name: 'Getsemani CC'
            },
            {
                lat: -7.009732009288218,
                lng: 110.42418827944661,
                link: 'https://maps.app.goo.gl/5YpDvNnbhFifHWpG6',
                name: 'Kana CC'
            },
            {
                lat: -7.008943071163984,
                lng: 110.43835475246355,
                link: 'https://maps.app.goo.gl/GXmSZtcYXXSXtG5m8',
                name: 'Karmel CC'
            },
            {
                lat: -6.971460352282355,
                lng: 110.38635229479073,
                link: 'https://maps.app.goo.gl/Q9AKmzKrpgLdS8WY6',
                name: 'Mahanaim CC'
            },
            {
                lat: -6.993900997488179,
                lng: 110.37859701213793,
                link: 'https://maps.app.goo.gl/fzsugxnCGe6AVy958',
                name: 'Sinai CC'
            },
            {
                lat: -7.018796627455877,
                lng: 110.44595025061057,
                link: 'https://maps.app.goo.gl/mkFbUQtsEraCHqiFA',
                name: 'Soin CC'
            }
        ];

        // Menambahkan marker untuk setiap lokasi
        locations.forEach(function(location) {
            var marker = L.marker([location.lat, location.lng]).addTo(map);

            var popupContent = `<a href="${location.link}" target="_blank">${location.name}</a>`;
            marker.bindPopup(popupContent);
        });
    </script>

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

</section>