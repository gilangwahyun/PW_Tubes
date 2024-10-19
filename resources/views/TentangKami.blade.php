<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Jaya - Tentang Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #212529;
            color: #fff;
        }
        .navbar {
            background-color: transparent;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: background-color 0.3s;
        }
        .navbar.scrolled {
            background-color: #343a40 !important; /* Warna gelap saat scroll */
        }
        .navbar-nav .nav-link {
            color: #fff;
            position: relative;
            padding-bottom: 10px; /* Spasi untuk garis */
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #ffc107; /* Warna link saat di-hover */
        }
        .navbar-nav .nav-link.active::after {
            content: '';
            display: block;
            width: 100%;
            height: 3px;
            background-color: #ffc107; /* Garis kuning di bawah menu aktif */
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .btn-custom {
            background-color: #ffc107;
            color: #000;
        }

        .btn-custom:hover {
            background-color: #e0a800;
        }

        .footer {
            background-color: #000;
        }

        .footer a {
            color: #ffc107;
        }

        .footer a:hover {
            color: #e0a800;
        }

        .hero-section {
            margin-top: 56px;
        }

        .about-section {
            margin-top: 100px;
            padding: 50px 0;
        }

        .about-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .about-content img {
            max-width: 300px;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Rental Jaya Logo" height="40">
                Rental Jaya
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('Beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('DaftarMobil') }}">Daftar Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('TentangKami') }}">Tentang Kami</a>
                    </li>
                </ul>
                <div class="d-flex ms-3">
                    <!-- Tombol Masuk/Daftar -->
                    <button id="auth-button" class="btn btn-custom me-2">Masuk/Daftar</button>
    
                    <!-- Dropdown profil (disembunyikan terlebih dahulu) -->
                    <div id="profile-dropdown" class="dropdown d-none">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="profileMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> <!-- Ikon profil -->
                        </a>
    
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileMenuLink">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="Form Pemesanan.html">Pesanan</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Tentang Kami Section -->
    <section class="about-section">
        <div class="about-content text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Rental Jaya Logo">
            <h1 class="display-5 fw-bold mb-4">Tentang Kami</h1>
            <p class="lead mb-5">
                Rental Jaya hadir untuk memenuhi kebutuhan transportasi Anda dengan layanan sewa mobil yang nyaman,
                aman, dan terpercaya. Kami menawarkan berbagai pilihan kendaraan mulai dari mobil keluarga, city car,
                hingga SUV, yang siap mendukung setiap perjalanan Anda. Dengan pelayanan profesional dan harga yang
                kompetitif, Rental Jaya siap menjadi mitra terbaik untuk perjalanan bisnis, liburan, maupun keperluan
                pribadi Anda.
            </p>
            <p class="lead">
                Nikmati pengalaman berkendara yang menyenangkan bersama Rental Jaya. Pemesanan mudah, layanan prima!
            </p>
        </div>
    </section>

    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        document.getElementById('auth-button').addEventListener('click', function() {
            // Sembunyikan tombol Masuk/Daftar
            this.classList.add('d-none');

            // Tampilkan ikon profil dengan dropdown
            document.getElementById('profile-dropdown').classList.remove('d-none');
        });
    </script>
</body>
</html>