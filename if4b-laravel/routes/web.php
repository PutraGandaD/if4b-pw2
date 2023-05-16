<?php

use App\Http\Controllers\ProdiController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function() {
    return "Halaman profil";
});

// Route::get('/mahasiswa/{nama}', function($nama) {
//     echo "Halo, nama saya " . $nama;
// });

Route::get('/dosen', function() {
    return view('dosen');
});

Route::get('/dosen/index', function() {
    return view('dosen.index');
});

// Route::get('/fakultas', function() {
//     // return view('fakultas', ['fikr' => 'Fakultas Ilmu Komputer dan Rekayasa']);


// Route::get('/prodi', [ProdiController::class, 'index']) -> name('prodi');
Route::resource('prodi', ProdiController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('mahasiswa', MahasiswaController::class);



