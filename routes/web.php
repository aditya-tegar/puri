<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template');
});

// Dashboard
Route::get(
    '/dashboard', function () {
        return view('dashboard.index');
    }
);

// Nasabah
Route::resource('nasabah', 'NasabahController');

// Customer
Route::resource('customer', 'CustomerController');


// Sampah
Route::resource('sampah', 'SampahController');

//transaksi
// Route::resource('transaksi', 'TransaksiController');

Route::resource('transaksi',TransaksiController::class);

// Pengguna
Route::get(
    '/pengguna', function () {
        return view('pengguna.index');
    }
);
Route::get(
    '/pengguna.tambah', function () {
        return view('pengguna.tambah');
    }
);
Route::get(
    '/pengguna.edit', function () {
        return view('pengguna.edit');
    }
);

// Transaksi Penimbangan
// Route::get(
//     '/transaksi', function () {
//         return view('transaksi.index');
//     }
// );
Route::get(
    '/transaksi.tambah', function () {
        return view('transaksi.tambah');
    }
);
Route::get(
    '/transaksi.edit', function () {
        return view('transaksi.edit');
    }
);

//Transaksi Penjualan
Route::get(
    '/penjualan', function () {
        return view('penjualan.index');
    }
);
Route::get(
    '/penjualan.edit', function () {
        return view('penjualan.edit');
    }
);

//Transaksi Penarikan
Route::get(
    '/penarikan', function () {
        return view('penarikan.index');
    }
);

//Transaksi Kelola Kas
Route::get(
    '/kelola_kas', function () {
        return view('kelola_kas.index');
    }
);
Route::get(
    '/kelola_kas.edit', function () {
        return view('kelola_kas.edit');
    }
);

//Laporan
Route::get(
    '/laporan', function () {
        return view('laporan.index');
    }
);
Route::get(
    '/laporan.kas', function () {
        return view('laporan.kas');
    }
);
Route::get(
    '/laporan.penimbangan', function () {
        return view('laporan.penimbangan');
    }
);
Route::get(
    '/laporan.penjualan', function () {
        return view('laporan.penjualan');
    }
);
Route::get(
    '/laporan.tabungan', function () {
        return view('laporan.tabungan');
    }
);
Route::get(
    '/laporan.detailtabungan', function () {
        return view('laporan.detailtabungan');
    }
);

//Informasi
Route::get(
    '/informasi.profil', function () {
        return view('informasi.profil');
    }
);
Route::get(
    '/informasi.sampah', function () {
        return view('informasi.sampah');
    }
);
Route::get(
    '/informasi.tabungan', function () {
        return view('informasi.tabungan');
    }
);



Auth::routes();
// Role
Route::get(
    '/role', function () {
        return view('role.index');
    }
);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
