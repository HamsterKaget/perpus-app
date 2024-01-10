<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PengarangController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// App Routes
Route::get('/', [AppController::class, 'index'])->name('home.index');

// Dahboard Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home.index');

    Route::middleware('auth')->prefix('/dashboard')->group(function () {
        // Route::get('/master-buku', [BukuController::class, 'index'])->name('dashboard.master-buku.index');
        Route::get('/master-buku', [BukuController::class, 'index'])->name('dashboard.master-buku.index');
        Route::post('/master-buku', [BukuController::class, 'store'])->name('dashboard.master-buku.create');
        Route::delete('/master-buku', [BukuController::class, 'destroy'])->name('dashboard.master-buku.delete');
        Route::get('/master-buku/getData', [BukuController::class, 'getData'])->name('dashboard.master-buku.getData');

        Route::get('/master-pengarang', [PengarangController::class, 'index'])->name('dashboard.master-pengarang.index');
        Route::post('/master-pengarang', [PengarangController::class, 'store'])->name('dashboard.master-pengarang.create');
        Route::delete('/master-pengarang', [PengarangController::class, 'destroy'])->name('dashboard.master-pengarang.delete');
        Route::get('/master-pengarang/getData', [PengarangController::class, 'getData'])->name('dashboard.master-pengarang.getData');


        Route::get('/master-penerbit', [PenerbitController::class, 'index'])->name('dashboard.master-penerbit.index');
        Route::post('/master-penerbit', [PenerbitController::class, 'store'])->name('dashboard.master-penerbit.create');
        Route::delete('/master-penerbit', [PenerbitController::class, 'destroy'])->name('dashboard.master-penerbit.delete');
        Route::get('/master-penerbit/getData', [PenerbitController::class, 'getData'])->name('dashboard.master-penerbit.getData');
    });
});


require __DIR__.'/auth.php';
