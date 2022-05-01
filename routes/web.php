<?php

use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\AnggotaController;
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
    return view('dashboard/index', [
        'title' => 'Dashboard',
    ]);
})->name('dashboard');

Route::resource('/peminjaman', PeminjamanController::class);
Route::resource('/pengembalian', PengembalianController::class);
Route::resource('/anggota', AnggotaController::class);


// Route::resources([
//     '/peminjaman' => PeminjamanController::class,
//     '/anggota' => AnggotaController::class,
// ]);


