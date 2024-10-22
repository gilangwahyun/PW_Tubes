@extends('dashboard')
@section('content')

<style>
    .content {
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 30vh;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logout-btn {
        background-color: #f0ad4e;
        border: none;
        padding: 5px 10px;
        border-radius: 3px;
        cursor: pointer;
        color: #222;
    }

    .logout-btn:hover {
        background-color: #e0983c;
    }

    table {
        width: 100%;
        color: #fff;
        margin-top: 20px;
        width: 1575px;
        margin-right: 300px;
    }

    table th, table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #555;
    }

    table th {
        background-color: #444;
    }

    table td {
        background-color: #333;
    }
</style>

<div class="content">
    <!-- Tabel User -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Mobil</th>
                <th>Nomor Plat Mobil</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Return</th>
                <th>Status</th>
                <th>Denda</th>
                <th>Pengembalian</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Brio</td>
                <td>AB 1111 CD</td>
                <td>10-10-2024</td>
                <td>16-10-2024</td>
                <td>Ongoing</td>
                <td>Rp 100.000</td>
                <td><button class="btn btn-primary">Konfirmasi</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
