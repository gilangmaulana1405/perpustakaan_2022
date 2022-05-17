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
use App\Http\Controllers\PinjamBukuController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\KontakController;
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
    Route::get('/main-page/cari-buku/search', [CariBukuController::class, 'search'])->name('cari-buku.search');
    Route::post('/main-page/galeri', [PinjamBukuController::class, 'store'])->name('pinjam.buku.store');
    Route::get('/main-page/galeri/create/{id}', [PinjamBukuController::class, 'create']);
    Route::get('/main-page/tutorial', [TutorialController::class, 'index']);
    Route::get('/main-page/kontak', [KontakController::class, 'index']);
    Route::post('/main-page/kontak', [KontakController::class, 'store'])->name('kontak.store');
});

Route::middleware(['auth'])->group(function (){
    Route::post('/logout', [LoginController::class, 'logout']);
    
    Route::get('/dashboard', function () {
        return view('dashboard/index', [
            'title' => 'Dashboard',
        ]);
    })->name('dashboard');
    
    Route::get('/pinjambuku', [PinjamBukuController::class, 'index'])->name('pinjam.buku');
    Route::get('/pinjambuku/{id}', [PinjamBukuController::class, 'edit'])->name('pinjam.buku.edit');
    Route::put('/pinjambuku/{id}', [PinjamBukuController::class, 'update'])->name('pinjam.buku.update');
    Route::delete('/pinjambuku/{id}', [PinjamBukuController::class, 'destroy'])->name('pinjam.buku.destroy');

    Route::resource('/peminjaman', PeminjamanController::class);
    Route::resource('/pengembalian', PengembalianController::class);
    Route::resource('/anggota', AnggotaController::class);
    Route::resource('/buku', BukuController::class);
});







// Route::resources([
//     '/peminjaman' => PeminjamanController::class,
//     '/anggota' => AnggotaController::class,
// ]);


