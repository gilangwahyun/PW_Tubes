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
        .bg-gray-800 {
            background-color: #343a40 !important;
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
        <div class="container">
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
                        <a class="nav-link" href="{{ url('TentangKami') }}">Tentang Kami</a>
                    </li>
                </ul>
                <div class="d-flex ms-3">
                    <!-- Dropdown profil, menggantikan tombol Masuk/Daftar -->
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="profileMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> <!-- Ikon profil -->
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileMenuLink">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="Form Pemesanan.html">Pesanan</a></li>
                            <li><a class="dropdown-item" href="Landing Page.html">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5 pt-5">
        <div class="p-4">
            <form action="halaman_pembayaran.html" method="POST">
                <div class="row g-4">
                    <!-- Detail Pemesan -->
                    <div class="col-md-6">
                        <div class="bg-gray-800 p-4 rounded">
                            <h2 class="text-xl font-bold mb-4">Detail Pemesan</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="form-label" for="nama">Nama Lengkap</label>
                                    <input class="form-control" id="nama" name="nama" placeholder="Masukkan nama" type="text" required />
                                </div>
                                <div>
                                    <label class="form-label" for="no-telp">Nomor Telepon</label>
                                    <input class="form-control" id="no-telp" name="no_telp" placeholder="Masukkan nomor telepon" type="text" required />
                                </div>
                                <div>
                                    <label class="form-label" for="email">Email</label>
                                    <input class="form-control" id="email" name="email" placeholder="Masukkan email" type="email" required />
                                </div>
                                <div>
                                    <label class="form-label" for="nik">NIK</label>
                                    <input class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" type="text" required />
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Detail Sewa Mobil -->
                    <div class="col-md-6">
                        <div class="bg-gray-800 p-4 rounded">
                            <h2 class="text-xl font-bold mb-4">Detail Sewa Mobil</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="form-label" for="jenis-mobil">Jenis Mobil</label>
                                    <input class="form-control" id="jenis-mobil" name="jenis_mobil" value="Toyota Corolla" readonly />
                                </div>
                                <div>
                                    <label class="form-label" for="tanggal-mulai">Tanggal Mulai</label>
                                    <input class="form-control" id="tanggal-mulai" name="tanggal_mulai" type="date" required onchange="hitungDurasi()" />
                                </div>
                                <div>
                                    <label class="form-label" for="tanggal-selesai">Tanggal Selesai</label>
                                    <input class="form-control" id="tanggal-selesai" name="tanggal_selesai" type="date" required onchange="hitungDurasi()" />
                                </div>
                                <div>
                                    <label class="form-label" for="durasi-sewa">Durasi Sewa (Hari)</label>
                                    <input class="form-control" id="durasi-sewa" name="durasi_sewa" type="number" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn btn-warning text-black w-100 py-3 rounded" type="submit">Lanjut ke Pembayaran</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <!-- <footer class="footer py-4">
        <div class="container text-center">
            <p>© 2024 Rental Jaya. All Rights Reserved.</p>
        </div>
    </footer> -->
    
    <script>
        function hitungDurasi() {
            const tanggalMulai = new Date(document.getElementById('tanggal-mulai').value);
            const tanggalSelesai = new Date(document.getElementById('tanggal-selesai').value);
    
            // Validasi tanggal
            if (tanggalMulai && tanggalSelesai && tanggalSelesai >= tanggalMulai) {
                const waktuSewa = (tanggalSelesai - tanggalMulai) / (1000 * 3600 * 24); // Menghitung selisih dalam hari
                document.getElementById('durasi-sewa').value = waktuSewa; // Mengisi field durasi sewa
            } else {
                document.getElementById('durasi-sewa').value = ''; // Reset durasi sewa jika tanggal tidak valid
            }
        }
    </script>
</body>
</html>