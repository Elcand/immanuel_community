<style>
    #home {
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .background-video {
        margin-bottom: 0 !important;
        display: block;
        width: 100%;
        height: 72%;
    }

    #churches .container {
        padding-top: 0 !important;
        margin-top: 0 !important;
    }


    #pdf-viewer-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        max-height: 750px;
        overflow: auto;
        /* Aktifkan scroll untuk konten panjang */
        padding: 20px;
        background-color: #f9f9f9;
        /* Warna latar lebih terang */
        margin: 20px auto;
        width: 80%;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
        /* Bayangan lebih lembut */
        border-radius: 8px;
        border: 1px solid #e0e0e0;
        /* Tambahkan border untuk batas */
    }

    #pdf-viewer-container::-webkit-scrollbar {
        width: 8px;
        /* Lebar scrollbar */
    }

    #pdf-viewer-container::-webkit-scrollbar-thumb {
        background-color: #ccc;
        /* Warna scrollbar */
        border-radius: 4px;
    }

    #pdf-viewer-container::-webkit-scrollbar-thumb:hover {
        background-color: #aaa;
        /* Warna scrollbar saat hover */
    }

    #pdf-viewer canvas {
        display: block;
        margin: 10px auto;
        /* Beri jarak antar halaman PDF */
        max-width: 100%;
        /* Pastikan kanvas responsif */
        height: auto;
        /* Sesuaikan tinggi proporsional */
    }


    /* Buttons styling */
    .button-container {
        text-align: center;
        margin-top: 20px;
    }

    .button {
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        background-color: #04aa6d;
        color: white;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #036d4c;
    }

    .button-container {
        display: flex;
        justify-content: center;
        /* Menempatkan tombol di tengah secara horizontal */
        width: 100%;
    }


    .button5 {
        background-color: #555555;
        color: white;
        border: 2px solid #555555;
        border-radius: 2px;
    }

    .button5:hover {
        background-color: #383838FF;
        color: white;
    }

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
        #pdf-viewer-container {
            width: 90%;
            max-height: 400px;
            padding: 8px;
        }

        #pdf-viewer canvas {
            background-color: none;
            max-width: 90%;
        }


        .background-video {
            height: auto;
        }

        .home-section {
            height: auto;
        }
    }

    @media (max-width: 480px) {
        #pdf-viewer-container {
            width: 100%;
            max-height: 300px;
            padding: 5px;
            margin: 0 10px;
        }

        #pdf-viewer {
            width: 100%;
        }

        .background-video {
            height: auto;
        }
    }
</style>


<section id="home" class="home-section d-flex align-items-center justify-content-center">
    <video autoplay muted loop playsinline class="background-video">
        <source src="assets/video/welcome.mp4" type="video/mp4">
    </video>
</section>

<section id="churches" class="churches-section  py-5">
    <div class="container">
        <h2 class="text-center display-3 font-weight-bold">Visi Immanuel Community </h2>
        <p style="font-weight: normal; font-size: 25px; text-align: center;">
            Membangun Gereja Menuju Kepenuhan Kristus </p>
    </div>

</section>
<section class="section-imani" id="pengakuan-iman">
    <div class="container">
        <h2 style="margin-bottom: 5%;">Immanuel Vision</h2>
        <p class="mb-4"></p>
        <div id="pdf-viewer-container">
            <div id="pdf-viewer"></div>

            <!-- Memuat PDF.js sebagai modul -->
            <script type="module" src="/immanuel_community/assets/pdf/pdf.js"></script>

            <script type="module">
                import * as pdfjsLib from '/immanuel_community/assets/pdf/pdf.js';

                // Menetapkan worker PDF.js
                pdfjsLib.GlobalWorkerOptions.workerSrc = '/immanuel_community/assets/pdf/pdf.worker.js';

                // URL file PDF
                const url = '/immanuel_community/assets/pdf/example.pdf';

                async function displayPDF() {
                    try {
                        const pdf = await pdfjsLib.getDocument(url).promise;
                        const viewer = document.getElementById('pdf-viewer');

                        for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
                            const page = await pdf.getPage(pageNum);
                            const canvas = document.createElement('canvas');
                            const context = canvas.getContext('2d');
                            const viewport = page.getViewport({
                                scale: 1.5
                            });

                            canvas.height = viewport.height;
                            canvas.width = viewport.width;

                            await page.render({
                                canvasContext: context,
                                viewport: viewport
                            }).promise;
                            viewer.appendChild(canvas);
                        }
                    } catch (error) {
                        console.error('Error displaying PDF:', error);
                    }
                }

                window.onload = displayPDF;
            </script>
        </div>
        <div class="button-container">
            <button class="button button5">
                <a href="https://drive.google.com/drive/folders/1-yrd5aWTamIL8G0F3hIQxrueM6Kmt7j4?usp=sharing" target="_blank" rel="noopener noreferrer" style="color:white; text-decoration: none;">Lainnya</a>
            </button>
        </div>
    </div>
</section>
<section class="section-lokasi" id="lokasi">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsMjkj0lMJPs5Mm2YXVQLr1IO0SgFMx3k"></script>

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
                name: 'Sion CC'
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