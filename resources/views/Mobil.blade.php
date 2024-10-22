@extends('dashboard')

@section('content')

<style>
    .content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .card {
        background-color: #2c2c2c;
        color: #fff;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 20px;
        width: 1575px;
        margin-right: 300px;
    }

    .form-control {
        border-radius: 10px;
        margin-bottom: 15px;
        background-color: #3e3e3e; 
        color: #fff; 
        padding: 10px;
        border: none;
    }

    .form-control::placeholder {
        color: #b3b3b3; 
    }

    .btn-primary {
        background-color: #ffc107;
        border: none;
        padding: 15px;
        width: 200px;
        margin-top: 20px;
        font-size: 1.2rem;
    }

    .btn-primary:hover {
        background-color: #e0a800; 
    }

    .car-card {
        background-color: #1f1f1f; 
        color: #fff;
        border-radius: 10px;
        padding: 20px;
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        width: 1575px;
        margin-right: 300px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
    }

    .car-card img {
        max-width: 200px;
        margin-right: 20px;
        border-radius: 10px;
    }

    .car-info {
        flex: 1;
    }

    .car-info h3 {
        font-size: 1.6rem;
        margin-bottom: 10px;
    }

    .car-info p {
        margin: 0;
        font-size: 1rem;
        color: #ccc;
    }

    .car-info h4 {
        color: #ffc107;
        font-size: 1.4rem;
        margin-top: 10px;
    }

    .car-actions {
        display: flex;
        gap: 10px;
    }

    .search-bar {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        width: 1575px;
        margin-right: 300px;
    }

    .search-bar input[type="text"] {
        flex: 1;
        padding-left: 40px;
    }

    .search-bar button {
        margin-left: 10px;
    }
</style>

<div class="content">
    <div class="search-bar">
        <input type="text" class="form-control" placeholder="Cari mobil..." name="search" aria-label="Search" value="">
        <button class="btn btn-warning" type="submit">Cari</button>
    </div>

    <div class="card">
        <h2 class="card-title">Tambah Mobil</h2>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Merk" required>
                    <input type="text" class="form-control" placeholder="Model" required>
                    <input type="text" class="form-control" placeholder="Tahun Pembuatan" required>
                    <input type="text" class="form-control" placeholder="Nomor Polisi" required>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Bahan Bakar" required>
                    <input type="text" class="form-control" placeholder="Kapasitas Penumpang" required>
                    <input type="text" class="form-control" placeholder="Harga Sewa per Hari" required>
                    <input type="file" class="form-control" placeholder="Gambar Mobil" required>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn-primary" style="border-radius: 10px;">Tambah</button>
            </div>
        </form>
    </div>

    <h2 class="mt-4 text-center">Daftar Mobil</h2>
    <div id="carList">
        <div class="car-card">
            <img src="{{ asset('images/ferrari.png') }}" alt="Ferrari LaFerrari">
            <div class="car-info">
                <h3>Ferrari LaFerrari</h3>
                <p><i class="fas fa-user"></i> 2 Penumpang</p>
                <p><i class="fas fa-cogs"></i> Automatic</p>
                <p><i class='fas fa-door-open'></i> 2 Pintu</p>
                <h4>IDR 15.000.000 per hari</h4>
            </div>
            <div class="car-actions">
                <button class="btn mt-3" style="background-color: red; color: #fff; padding: 10px 20px; border-radius: 5px; border: none; font-size: 1.1rem;">Hapus</button>
                <button class="btn mt-3" style="background-color: blue; color: #fff; padding: 10px 20px; border-radius: 5px; border: none; font-size: 1.1rem;">Edit</button>
            </div>
        </div>
    </div>
</div>
@endsection