<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Jaya - Pembayaran</title>
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
            margin-top: 70px;
        }

        .form-section {
            background-color: #343a40;
            padding: 20px;
            border-radius: 10px;
        }

        .form-section h4 {
            color: #ffc107;
            margin-bottom: 20px;
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
            padding: 20px 0;
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

    <!-- Payment Form Section -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="bg-gray-800 p-2 rounded">
                        <h4 class="text-center mb-4">Pembayaran</h4>
                        <!-- Informasi Pembayaran -->
                        <p><strong>Nomor Pembayaran:</strong> 1234</p>
                        <p><strong>ID Penyewaan:</strong> 12</p>
                        <p><strong>Total Biaya: IDR 350.000</strong></p>
                        <hr>

                        <!-- Pilihan Metode Pembayaran -->
                        <div class="mb-3">
                            <label for="metode-pembayaran" class="form-label">Pilih Metode Pembayaran:</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="metode_pembayaran" id="creditCard" value="credit_card">
                                <label class="form-check-label" for="creditCard">
                                    <i class="fas fa-credit-card payment-icons"></i> Kartu Kredit
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="metode_pembayaran" id="bankTransfer" value="bank_transfer">
                                <label class="form-check-label" for="bankTransfer">
                                    <i class="fas fa-university payment-icons"></i> Transfer Bank
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="metode_pembayaran" id="eWallet" value="e_wallet">
                                <label class="form-check-label" for="eWallet">
                                    <i class="fas fa-money-bill-wave-alt"></i> Tunai
                                </label>
                            </div>
                        </div>

                        <!-- Checklist for Confirmation -->
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="agree1" required>
                                <label class="form-check-label" for="agree1">
                                    Saya telah membaca syarat dan ketentuan.
                                </label>
                            </div>
                        </div>

                        <!-- Tombol Konfirmasi Pembayaran -->
                        <button class="btn btn-custom w-100 py-3">Konfirmasi Pembayaran</button>
                    </div>          
                </div>
            </div>
        </div>
    </div>

    <!-- <footer class="footer text-center mt-5">
        <div class="container">
            <p>© 2024 Rental Jaya. All Rights Reserved.</p>
        </div>
    </footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
