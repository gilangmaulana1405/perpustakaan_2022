<?php

use App\Http\Controllers\PeminjamanController;
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


// Anggota
Route::get('/anggota', [AnggotaController::class, 'index']);
Route::post('/anggota', [AnggotaController::class, 'store']);
Route::get('/anggota/edit/{id}', [AnggotaController::class, 'edit'])->name('edit.anggota');
Route::get('/anggota/destroy/{id}', [AnggotaController::class, 'destroy'])->name('delete.anggota');



// Route::resources([
//     '/peminjaman' => PeminjamanController::class,
//     '/anggota' => AnggotaController::class,
// ]);


