<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background-color: #ffffff;
            transition: margin-left .3s;
        }

        .navbar {
            background-color: #ffffff;
            color: #000;
        }

        .sidebar {
            height: 100%;
            position: fixed;
            top: 56px;
            left: 0;
            z-index: 100;
            background: #343a40;
            padding-top: 20px;
            width: 300px;
            transition: transform .3s ease;
        }

        .sidebar.hidden {
            transform: translateX(-100%);
        }

        .content {
            margin-left: 300px;
            transition: margin-left .3s;
        }

        .content.hidden {
            margin-left: 0;
        }

        .nav-link {
            color: white;
        }

        .nav-link:hover {
            color: yellow;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-light shadow fixed-top">
            <div class="container-fluid">
                <button class="btn btn-outline-secondary" id="toggleSidebar">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="d-flex ms-auto">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </div>
            </div>
        </nav>

        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid mb-2" style="width: 80px;">
                <h5 class="text-white">Rental Jaya</h5>
            </div>
            <nav class="nav flex-column">
                <a class="nav-link" href="{{ url('BerandaAdmin') }}">
                    <i class="nav-icon fas fa-home"></i> Beranda
                </a>
                <a class="nav-link" href="{{ url('Mobil') }}">
                    <i class="nav-icon fas fa-car"></i> Mobil
                </a>
                <a class="nav-link" href="{{ url('User') }}">
                    <i class="nav-icon fas fa-users"></i> Pengguna
                </a>
            </nav>
        </aside>

        <div class="content" id="content">
            @yield('content')
        </div>
    </div>

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Apakah ingin Logout?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="{{ url('/') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');

        toggleSidebar.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            content.classList.toggle('hidden');
        });
    </script>
</body>
</html>
