<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Beranda');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/Beranda', function () {
    return view('Beranda');
});

Route::get('/DaftarMobil', function () {
    $cars = [
        [
            'name' => 'Toyota Corolla',
            'license' => 'AB 1234 CD',
            'year' => '2020',
            'seats' => '5 seats',
            'transmission' => 'Automatic',
            'fuel' => 'Gasoline',
            'price' => 'IDR 300.000',
            'image' => asset('images/car7.jpg'),
        ],
        [
            'name' => 'Honda Civic',
            'license' => 'AB 1234 CD',
            'year' => '2021',
            'seats' => '5 seats',
            'transmission' => 'Automatic',
            'fuel' => 'Gasoline',
            'price' => 'IDR 350.000',
            'image' => asset('images/car6.jpg'),
        ],
        [
            'name' => 'Suzuki Swift',
            'license' => 'AB 1234 CD',
            'year' => '2019',
            'seats' => '5 seats',
            'transmission' => 'Manual',
            'fuel' => 'Gasoline',
            'price' => 'IDR 250.000',
            'image' => asset('images/car4.jpg'),
        ],
        [
            'name' => 'Nissan Altima',
            'license' => 'AB 1234 CD',
            'year' => '2020',
            'seats' => '5 seats',
            'transmission' => 'Automatic',
            'fuel' => 'Gasoline',
            'price' => 'IDR 320.000',
            'image' => asset('images/car3.jpg'),
        ],
    ];

    return view('DaftarMobil', compact('cars'));
});

Route::get('/DetailMobil', function () {
    return view('DetailMobil');
});

Route::get('/TentangKami', function () {
    return view('TentangKami');
});

Route::get('/FormPemesanan', function () {
    return view('FormPemesanan');
});

Route::get('/Profil', function () {
    return view('Profil');
});

Route::get('/Pesanan', function () {
    $bookings = [
        [
            'name' => 'Toyota Corolla',
            'license' => 'AB 1234 CD',
            'year' => '2020',
            'seats' => '5 seats',
            'transmission' => 'Automatic',
            'fuel' => 'Gasoline',
            'price' => 'IDR 300.000',
            'image' => asset('images/car7.jpg'),
            'status' => 'Selesai',
            'rent_date' => '2024-07-15',
            'return_date' => '2024-07-20',
        ],
        [
            'name' => 'Honda Civic',
            'license' => 'EF 5678 GH',
            'year' => '2021',
            'seats' => '5 seats',
            'transmission' => 'Automatic',
            'fuel' => 'Gasoline',
            'price' => 'IDR 400.000',
            'image' => asset('images/car8.jpg'),
            'status' => 'Sedang Berlangsung',
            'rent_date' => '2024-08-01',
            'return_date' => '2024-08-05',
        ],
    ];

    return view('Pesanan', compact('bookings'));
});

Route::get('/Pembayaran', function () {
    return view('Pembayaran');
});