<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Jaya - Daftar Pemesanan</title>
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

        .container {
            margin-top: 80px; /* to prevent overlap with navbar */
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
                        <a class="nav-link" href="{{ url('TentangKami') }}">Tentang Kami</a>
                    </li>
                </ul>
                <div class="d-flex ms-3">
                    <div id="profile-dropdown" class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="profileMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i>
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

    <div class="content">
        <div class="container">
            <h1 class="text-center mb-4">Daftar Pemesanan</h1>
            <div class="table-responsive">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Mobil</th>
                            <th scope="col">Nomor Plat Mobil</th> <!-- Kolom baru untuk nomor plat -->
                            <th scope="col">Tanggal Sewa</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Toyota Avanza</td>
                            <td>AB 1234 CD</td> <!-- Nomor plat mobil -->
                            <td>2024-07-15</td>
                            <td>2024-07-20</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Detail</a>
                                <a href="#" class="btn btn-danger btn-sm">Batalkan</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Honda Civic</td>
                            <td>EF 5678 GH</td> <!-- Nomor plat mobil -->
                            <td>2024-08-01</td>
                            <td>2024-08-05</td>
                            <td><span class="badge bg-warning">Sedang Berlangsung</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Detail</a>
                                <a href="#" class="btn btn-danger btn-sm">Batalkan</a>
                            </td>
                        </tr>
                        <!-- Tambahkan baris pemesanan lain sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <!-- <footer class="footer py-4">
        <div class="container text-center">
            <p>© 2024 Rental Jaya. All Rights Reserved.</p>
        </div>
    </footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Change navbar background on scroll
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
