@extends('dashboard')

@section('content')

<style>
    body {
        background-color: #ffffff; 
        color: #ffffff; 
    }
    .recap-section {
        display: flex;
        justify-content: space-between;
    }
    .recap-card {
        background-color: #2c2c2c; 
        color: #ffffff; 
        text-align: center;
        width: 32%;
        padding: 20px;
        border-radius: 10px;
    }
    .recap-title {
        font-size: 1.2rem; 
    }
    .recap-number {
        font-size: 2rem;
        font-weight: bold;
    }
    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }
    table th, table td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid #dee2e6;
    }
    table th {
        background-color: #495057;
        color: #ffffff;
    }
    table td {
        background-color: #212529; 
        color: #ffffff;
    }
    .btn-custom {
        background-color: #ffc107;
        color: #000;
    }
    .btn-custom:hover {
        background-color: #e0a800; 
    }
</style>

<div class="container mt-5 pt-5">
    
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Recap Mobil</h2>
            <div class="recap-section d-flex justify-content-between">
                <div class="recap-card text-center">
                    <h3 class="recap-title">Jumlah Mobil Tersedia</h3>
                    <p class="recap-number">20</p>
                </div>
                <div class="recap-card text-center">
                    <h3 class="recap-title">Jumlah Sewa Aktif</h3>
                    <p class="recap-number">5</p>
                </div>
                <div class="recap-card text-center">
                    <h3 class="recap-title">Total Pelanggan Terdaftar</h3>
                    <p class="recap-number">50</p>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-custom mt-3">EDIT</button>
            </div>
        </div>
    </div>
    
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Recap Pembayaran</h2>
            <div class="recap-section d-flex justify-content-between">
                <div class="recap-card text-center">
                    <h3 class="recap-title">Hari Ini</h3>
                    <p class="recap-number">Rp5.000.000</p>
                </div>
                <div class="recap-card text-center">
                    <h3 class="recap-title">Minggu Ini</h3>
                    <p class="recap-number">Rp35.000.000</p>
                </div>
                <div class="recap-card text-center">
                    <h3 class="recap-title">Bulan Ini</h3>
                    <p class="recap-number">Rp100.000.000</p>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-custom mt-3">EDIT</button>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Transaksi Terbaru</h2>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Mobil</th>
                        <th>Nomor Plat Mobil</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Return</th>
                        <th>Status</th>
                        <th>Total Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Avanza</td>
                        <td>AB 1111 CD</td>
                        <td>01-10-2024</td>
                        <td>05-10-2024</td>
                        <td>Complete</td>
                        <td>Rp1.500.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>LaFerrari</td>
                        <td>AB 1112 DE</td>
                        <td>05-10-2024</td>
                        <td>10-10-2024</td>
                        <td>Complete</td>
                        <td>Rp15.500.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Brio</td>
                        <td>AB 1113 EF</td>
                        <td>10-10-2024</td>
                        <td>16-10-2024</td>
                        <td>Ongoing</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                <button class="btn btn-custom mt-3">EDIT</button>
            </div>
        </div>
    </div>
</div>
@endsection
