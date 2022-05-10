<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\CariBukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::middleware(['guest'])->group(function (){
    Route::get('/', [HomeController::class, 'index']);

    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'authenticate']); 

    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/main-page/home', [HomeController::class, 'index']);
    Route::get('/main-page/galeri', [GaleriController::class, 'index'])->name('galeri');
    Route::get('/main-page/galeri/{id}', [GaleriController::class, 'show'])->name('galeri.show');
    Route::get('/main-page/cari-buku', [CariBukuController::class, 'index']);
});

Route::middleware(['auth'])->group(function (){
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::get('/dashboard', function () {
        return view('dashboard/index', [
            'title' => 'Dashboard',
        ]);
    })->name('dashboard');

    Route::resource('/peminjaman', PeminjamanController::class);
    Route::resource('/pengembalian', PengembalianController::class);
    Route::resource('/anggota', AnggotaController::class);
    Route::resource('/buku', BukuController::class);
});







// Route::resources([
//     '/peminjaman' => PeminjamanController::class,
//     '/anggota' => AnggotaController::class,
// ]);


