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
            position: relative;
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('Beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('DaftarMobil') }}">Daftar Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('TentangKami') }}">Tentang Kami</a>
                    </li>
                </ul>
                <div class="d-flex ms-3">
                    <!-- Tombol Masuk/Daftar -->
                    <a href="{{ url('Login') }}" class="btn btn-custom me-2">Masuk/Daftar</a>
    
                    <!-- Dropdown profil -->
                    <div class="dropdown">
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

    <!-- Carousel -->
    <main>
        <section class="hero-section position-relative">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/car1.jpg') }}" alt="Hero Image 1" class="w-100" style="height: 1080px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/car2.jpg') }}" alt="Hero Image 2" class="w-100" style="height: 1080px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/car3.jpg') }}" alt="Hero Image 3" class="w-100" style="height: 1080px;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Pelayanan Kami -->
        <section class="py-5">
            <div class="container">
                <h2 class="fw-bold mb-5 text-center">Pelayanan Kami</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card card-custom text-center p-4">
                            <h5 class="card-title"><strong>Sewa Mobil</strong></h5>
                            <p class="card-text">Menyediakan layanan rental mobil dengan berbagai pilihan mobil.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-custom text-center p-4">
                            <h5 class="card-title"><strong>Penyewaan Jangka Panjang</strong></h5>
                            <p class="card-text">Menawarkan leasing kendaraan yang memerlukan mobil dalam jangka panjang.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-custom text-center p-4">
                            <h5 class="card-title"><strong>Apa Ya</strong></h5>
                            <p class="card-text">Gatau lah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mobil Favorit -->
        <section class="py-5 bg-dark">
            <div class="container">
                <h2 class="text-center fw-bold mb-4">Mobil Favorit</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card card-custom">
                            <img src="{{ asset('images/car4.jpg') }}" alt="Mobil Favorit 1" class="card-img-top" style="width: 100%; height: 250px;">
                            <div class="card-body">
                                <h4><b>Avanza</b></h4>
                                <p class="card-text"><i class="fas fa-users text-warning"></i> 7</p>
                                <p class="card-text"><i class="fas fa-cogs text-warning"></i> Automatic</p>
                                <p class="fw-bold">IDR 300.000</p>
                                <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#carDetailModal"
                                    onclick="showCarDetails('Avanza', 'AB 1234 CD', '2020', '7 seats', 'Automatic', 'Gasoline', 'IDR 300.000', '{{ asset('images/car4.jpg') }}')">
                                    Lihat Detail
                                </button>
                                <button class="btn btn-primary">
                                    <a href="{{ url('FormPemesanan') }}" style="color: white; text-decoration: none;">Pesan
                                        Sekarang</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card card-custom">
                            <img src="{{ asset('images/car5.jpeg') }}" alt="Mobil Favorit 2" class="card-img-top" style="width: 100%; height: 250px;">
                            <div class="card-body">
                                <h4><b>Brio</b></h4>
                                <p class="card-text"><i class="fas fa-users text-warning"></i> 5</p>
                                <p class="card-text"><i class="fas fa-cogs text-warning"></i> Automatic</p>
                                <p class="fw-bold">IDR 300.000</p>
                                <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#carDetailModal"
                                    onclick="showCarDetails('Brio', 'AB 1234 CD', '2020', '5 seats', 'Automatic', 'Gasoline', 'IDR 300.000', '{{ asset('images/car5.jpeg') }}')">
                                    Lihat Detail
                                </button>
                                <button class="btn btn-primary">
                                    <a href="{{ url('FormPemesanan') }}" style="color: white; text-decoration: none;">Pesan
                                        Sekarang</a>
                                </button>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card card-custom">
                            <img src="{{ asset('images/car6.jpg') }}" alt="Mobil Favorit 3" class="card-img-top" style="width: 100%; height: 250px;">
                            <div class="card-body">
                                <h4><b>Xenia</b></h4>
                                <p class="card-text"><i class="fas fa-users text-warning"></i> 7</p>
                                <p class="card-text"><i class="fas fa-cogs text-warning"></i> Automatic</p>
                                <p class="fw-bold">IDR 300.000</p>
                                <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#carDetailModal"
                                    onclick="showCarDetails('Xenia', 'AB 1234 CD', '2020', '7 seats', 'Automatic', 'Gasoline', 'IDR 300.000', '{{ asset('images/car6.jpg') }}')">
                                    Lihat Detail
                                </button>
                                <button class="btn btn-primary">
                                    <a href="{{ url('FormPemesanan') }}" style="color: white; text-decoration: none;">Pesan
                                        Sekarang</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- Bagaimana Caranya? -->
        <section class="py-5">
            <div class="container">
                <h2 class="fw-bold mb-5 text-center">Bagaimana Caranya?</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card card-custom text-center p-4">
                            <h5 class="card-title"><strong>Pilih Mobil</strong></h5>
                            <p class="card-text">Pilih Mobil Yang Kamu Inginkan</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-custom text-center p-4">
                            <h5 class="card-title"><strong>Pesan Mobil</strong></h5>
                            <p class="card-text">Lakukan Pemesanan Dengan Mengisi Form</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-custom text-center p-4">
                            <h5 class="card-title"><strong>Berkendara</strong></h5>
                            <p class="card-text">Nikmati Berkendara Dengan Mobil Pilihanmu</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <!-- <footer class="footer py-4">
        <div class="container text-center">
            <p>© 2024 Rental Jaya. All Rights Reserved.</p>
        </div>
    </footer> -->

    <div class="modal fade" id="carDetailModal" tabindex="-1" aria-labelledby="carDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="carDetailModalLabel">Detail Mobil</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img id="carImage" src="" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-6">
                            <h4 id="carName"></h4>
                            <h5 id="carLicense"></h5>
                            <p id="carYear"></p>
                            <p id="carSeats"></p>
                            <p id="carTransmission"></p>
                            <p id="carFuel"></p>
                            <p class="fw-bold" id="carPrice"></p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Change navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        function showCarDetails(name, license, year, seats, transmission, fuel, price, image) {
            document.getElementById('carName').innerText = name;
            document.getElementById('carLicense').innerText = license;
            document.getElementById('carYear').innerText = `Tahun: ${year}`;
            document.getElementById('carSeats').innerText = seats;
            document.getElementById('carTransmission').innerText = transmission;
            document.getElementById('carFuel').innerText = fuel;
            document.getElementById('carPrice').innerText = price;
            document.getElementById('carImage').src = image;
        }
    </script>
</body>
</html>
