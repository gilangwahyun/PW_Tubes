<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Jaya - Register</title>

    <!-- Fonts and Bootstrap -->
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

        .register-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 56px; /* Add space for fixed navbar */
        }

        .register-form {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background-color: #343a40;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            background-color: #212529;
            color: #fff;
            border: 1px solid #444;
        }

        .form-control:focus {
            border-color: #ffc107;
            box-shadow: none;
        }

        .btn-custom {
            background-color: #ffc107;
            color: #000;
        }

        .btn-custom:hover {
            background-color: #e0a800;
        }

        .form-text {
            color: #fff;
        }

        .text-warning {
            color: #ffc107;
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
            </div>
        </div>
    </nav>

    <!-- Register Form -->
    <div class="register-container">
        <div class="register-form">
            <h3 class="text-center mb-4">Daftar ke Rental Jaya</h3>
            <form action="">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="no_sim" class="form-label">No Sim</label>
                    <input type="text" class="form-control" id="no_sim" name="no_sim" required>
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No Telp</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-custom">Daftar</button>
                </div>
                <div class="text-center mt-3">
                    <span>Sudah punya akun?</span>
                    <a href="{{ url('Login') }}" class="text-warning">Masuk</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
