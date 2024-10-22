<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Jaya</title>
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

        .card-custom {
            background-color: #343a40;
            border: none;
            color: #fff;
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

        .search-card {
            background-color: #000;
            color: #fff;
        }

        .car-card {
            background-color: #343a40;
            border-radius: 0.5rem;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .car-card img {
            border-radius: 0.5rem;
            margin-right: 20px;
        }

        .carousel-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .carousel-item img {
            margin-right: 20px;
        }

        .carousel-control-next,
        .carousel-control-prev {
            filter: brightness(0) invert(1);
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 300px;
            margin: 10px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;

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
                        <a class="nav-link active" href="{{ url('DaftarMobil') }}">Daftar Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('TentangKami') }}">Tentang Kami</a>
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
                        <li><a class="dropdown-item" href="{{ url('Profil') }}">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ url('Pesanan') }}">Pesanan</a></li>
                            <li><a class="dropdown-item" href="{{ url('Beranda') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        <form action="{{ url('DaftarMobil') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari mobil..." name="search" aria-label="Search" value="">
                <button class="btn btn-warning" type="submit">Cari</button>
            </div>
        </form>

        <div class="d-flex justify-content-center flex-wrap mb-4">
            <button class="btn btn-warning me-2">Semua</button>
            <button class="btn btn-secondary me-2">MPV</button>
            <button class="btn btn-secondary me-2">SUV</button>
            <button class="btn btn-secondary me-2">Sport</button>
            <button class="btn btn-secondary me-2">Hatchback</button>
            <button class="btn btn-secondary me-2">Convertible</button>
            <button class="btn btn-secondary">Off-Road</button>
        </div>
        <div class="container">
            <!-- Mobil -->
            <div class="row">
                @forelse($cars as $car)
                    <div class="col-md-4 mb-4">
                        <div class="card bg-dark text-light" style="width: 100%; height: 100%;">
                            <img src="{{ $car['image'] }}" alt="{{ $car['name'] }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                            <div class="card-body">
                                <h4><b>{{ $car['name'] }}</b></h4>
                                <p class="card-text"><i class="fas fa-users text-warning"></i> {{ $car['seats'] }}</p>
                                <p class="card-text"><i class="fas fa-cogs text-warning"></i> {{ $car['transmission'] }}</p>
                                <p class="fw-bold">{{ $car['price'] }}</p>
                                <button class="btn btn-custom">
                                    <a href="{{ url('DetailMobil') }}" style="color: white; text-decoration: none;">
                                        Lihat Detail
                                    </a>
                                </button>
                                <button class="btn btn-primary">
                                    <a href="{{ url('FormPemesanan') }}" style="color: white; text-decoration: none;">Pesan
                                        Sekarang</a>
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No cars available.</p>
                @endforelse
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
            this.classList.add('d-none');

            document.getElementById('profile-dropdown').classList.remove('d-none');
        });
    </script>
</body>

</html>