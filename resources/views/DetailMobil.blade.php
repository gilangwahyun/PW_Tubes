<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil - Rental Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #212529;
            color: #fff;
            padding-top: 70px;
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
            background-color: #343a40 !important;
        }

        .navbar-nav .nav-link {
            color: #fff;
            position: relative;
            padding-bottom: 10px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107;
        }

        .navbar-nav .nav-link.active::after {
            content: '';
            display: block;
            width: 100%;
            height: 3px;
            background-color: #ffc107;
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

        .detail-card {
            background-color: #343a40;
            border-radius: 0.5rem;
            padding: 20px;
            margin-top: 20px;
        }

        .detail-card img {
            border-radius: 0.5rem;
            margin-bottom: 20px;
            width: 100%;
            height: auto;
        }

        .detail-info h2,
        .detail-info h4 {
            margin-bottom: 10px;
        }

        .detail-info p {
            margin-bottom: 5px;
        }

        .detail-info .btn {
            margin-top: 20px;
        }

        .feature-box {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #fff;
            border-radius: 0.5rem;
            margin-right: 10px;
            flex: 1;
        }

        .feature-box i {
            font-size: 24px;
            margin-right: 10px;
        }

        .feature-box span {
            font-size: 16px;
        }

        .car-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .car-type {
            font-size: 18px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('Beranda') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Rental Jaya Logo" height="40">
                Rental Jaya
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="{{ url('TentangKami') }}">Tentang Kami</a>
                    </li>
                </ul>
                <div class="d-flex ms-3">
                    <button id="auth-button" class="btn btn-custom me-2">Masuk/Daftar</button>

                    <div id="profile-dropdown" class="dropdown d-none">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="profileMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileMenuLink">
                            <li><a class="dropdown-item" href="{{ url('Profil') }}">Profil</a></li>
                            <li><a class="dropdown-item" href="{{ url('Pesanan') }}">Pesanan</a></li>
                            <li><a class="dropdown-item" href="{{ url('Beranda') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="detail-card">
                    <div class="car-title">Toyota Corolla</div>
                    <div class="car-type">Sedan</div>
                    <img src="{{ asset('images/car7.jpg') }}" alt="Toyota Corolla" class="img-fluid">
                    <p>Toyota Corolla adalah mobil yang terkenal dengan kenyamanan dan efisiensi bahan bakar. 
                        Cocok untuk perjalanan jarak jauh maupun penggunaan sehari-hari. 
                        Dikenal sebagai kendaraan yang handal dan memiliki performa yang baik.</p>

                    <p><strong>Nomor Polisi:</strong> AB 1234 CD</p>
                    <p><strong>Tahun Pembuatan:</strong> 2020</p>

                    <div class="detail-info d-flex flex-wrap">
                        <div class="feature-box d-flex flex-column align-items-center">
                            <i class="fas fa-users mb-2"></i>
                            <span>5 seats</span>
                        </div>
                        <div class="feature-box d-flex flex-column align-items-center">
                            <i class="fas fa-cogs mb-2"></i>
                            <span>Automatic</span>
                        </div>
                        <div class="feature-box d-flex flex-column align-items-center">
                            <i class="fas fa-gas-pump mb-2"></i>
                            <span>Bensin</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="detail-card">
                    <h2>IDR 350.000 / hari</h2>
                    <p><strong>Durasi Minimum:</strong> 1 Hari</p>
                    <p><strong>Kebijakan Pembatalan:</strong> Gratis Sebelum 24 Jam Penyewaan</p>
                    <button class="btn btn-primary">
                        <a href="{{ url('FormPemesanan') }}" style="color: white; text-decoration: none;">Pesan Sekarang</a>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>