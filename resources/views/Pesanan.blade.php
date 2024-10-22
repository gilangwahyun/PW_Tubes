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
            margin-top: 80px;
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

        .modal-content {
            background-color: #6c757d;
            color: #fff;
        }

        .modal-header,
        .modal-footer {
            border-color: #495057;
        }

        .modal-title {
            color: #ffc107
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
                    <div id="profile-dropdown" class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="profileMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                            <th scope="col">Nomor Plat Mobil</th>
                            <th scope="col">Tanggal Sewa</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bookings as $index => $booking)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $booking['name'] }}</td>
                                <td>{{ $booking['license'] }}</td>
                                <td>{{ $booking['rent_date'] }}</td>
                                <td>{{ $booking['return_date'] }}</td>
                                <td>
                                    <span class="badge {{ $booking['status'] == 'Selesai' ? 'bg-success' : 'bg-warning' }}">
                                        {{ $booking['status'] }}
                                    </span>
                                </td>
                                <td>
                                    <button class="btn btn-info btn-sm" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#detailModal" 
                                            data-name="{{ $booking['name'] }}" 
                                            data-license="{{ $booking['license'] }}" 
                                            data-rent_date="{{ $booking['rent_date'] }}" 
                                            data-return_date="{{ $booking['return_date'] }}" 
                                            data-status="{{ $booking['status'] }}">
                                        Detail
                                    </button>
                                    @if ($booking['status'] == 'Selesai')
                                        <button class="btn btn-warning btn-sm" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#pengembalianModal" 
                                                data-name="{{ $booking['name'] }}">
                                            Pengembalian
                                        </button>
                                    @else
                                        <button class="btn btn-danger btn-sm">Batalkan</button>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada pemesanan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Detail -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Nomor Plat: <span id="modalLicense"></span></p>
                    <p>Tanggal Sewa: <span id="modalRentDate"></span></p>
                    <p>Tanggal Kembali: <span id="modalReturnDate"></span></p>
                    <p>Status: <span id="modalStatus"></span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Pengembalian -->
    <div class="modal fade" id="pengembalianModal" tabindex="-1" aria-labelledby="pengembalianModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pengembalianModalLabel">Konfirmasi Pengembalian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin mengembalikan mobil <span id="pengembalianName"></span> ini?</p>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Kerusakan Mobil (pilih semua yang sesuai)</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Tidak Ada Kerusakan" id="kerusakan0">
                                <label class="form-check-label" for="kerusakan0">Tidak Ada Kerusakan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Cat Tergores" id="kerusakan1">
                                <label class="form-check-label" for="kerusakan1">Cat Tergores</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Kaca Pecah" id="kerusakan2">
                                <label class="form-check-label" for="kerusakan2">Kaca Pecah</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Ban Kempes" id="kerusakan3">
                                <label class="form-check-label" for="kerusakan3">Ban Kempes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Mesin Bermasalah" id="kerusakan4">
                                <label class="form-check-label" for="kerusakan4">Mesin Bermasalah</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Kerusakan Lain" id="kerusakan5">
                                <label class="form-check-label" for="kerusakan5">Kerusakan Lain</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan Kerusakan (jika ada)</label>
                            <textarea class="form-control" id="keterangan" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Kembalikan Mobil</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script untuk mengisi modal detail
        const detailModal = document.getElementById('detailModal');
        detailModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const name = button.getAttribute('data-name');
            const license = button.getAttribute('data-license');
            const rent_date = button.getAttribute('data-rent_date');
            const return_date = button.getAttribute('data-return_date');
            const status = button.getAttribute('data-status');

            detailModal.querySelector('#modalLicense').textContent = license;
            detailModal.querySelector('#modalRentDate').textContent = rent_date;
            detailModal.querySelector('#modalReturnDate').textContent = return_date;
            detailModal.querySelector('#modalStatus').textContent = status;
        });

        // Script untuk mengisi modal pengembalian
        const pengembalianModal = document.getElementById('pengembalianModal');
        pengembalianModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const name = button.getAttribute('data-name');
            pengembalianModal.querySelector('#pengembalianName').textContent = name;
        });
    </script>
</body>

</html>
