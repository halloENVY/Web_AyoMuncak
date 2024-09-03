<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GunungController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminGunungController;
use App\Http\Controllers\AdminPengalamanController;
use App\Http\Controllers\AdminTourController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\PengalamanController;

// Rute untuk halaman beranda (index)
Route::get('/', [GunungController::class, 'index'])->name('beranda');

// Rute untuk halaman jelajah
Route::get('/jelajah', [GunungController::class, 'jelajah'])->name('jelajah');

// Rute untuk halaman detail gunung
Route::get('/gunung/{id}', [GunungController::class, 'show'])->name('gunung.show');

// Rute untuk menyimpan pengalaman
Route::post('/gunung/{id}/pengalaman', [GunungController::class, 'storePengalaman'])->name('pengalaman.store');

// Rute untuk menyimpan informasi tour
Route::post('/gunung/{id}/tour', [TourController::class, 'store'])->name('tour.store');

Route::get('/pengalaman', [PengalamanController::class, 'index'])->name('pengalaman.index');


// Admin
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Rute untuk halaman admin-index
Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index')->middleware('auth:admin');

// Rute untuk data gunung admin
Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
    // Rute untuk halaman admin-index
    Route::get('index', [AdminController::class, 'index'])->name('index');

    // Rute untuk data gunung admin
    Route::resource('gunung', AdminGunungController::class);

    // Rute untuk data pengalaman admin
    Route::resource('pengalaman', AdminPengalamanController::class);

    Route::get('/pengalaman', [PengalamanController::class, 'index'])->name('pengalaman.index');

    // Rute untuk menyimpan pengalaman
    Route::post('/gunung/{id}/pengalaman', [GunungController::class, 'storePengalaman'])->name('pengalaman.store');

    // Rute untuk data tour admin
    Route::resource('tour', AdminTourController::class);
});

// Rute untuk data pengalaman admin
Route::middleware(['auth:admin'])->group(function () {
    Route::get('admin/pengalaman', [AdminPengalamanController::class, 'index'])->name('admin.pengalaman.index');
    Route::get('admin/pengalaman/create', [AdminPengalamanController::class, 'create'])->name('admin.pengalaman.create');
    Route::post('admin/pengalaman', [AdminPengalamanController::class, 'store'])->name('admin.pengalaman.store');
    Route::get('admin/pengalaman/{pengalaman}/edit', [AdminPengalamanController::class, 'edit'])->name('admin.pengalaman.edit');
    Route::put('admin/pengalaman/{pengalaman}', [AdminPengalamanController::class, 'update'])->name('admin.pengalaman.update');
    Route::delete('admin/pengalaman/{pengalaman}', [AdminPengalamanController::class, 'destroy'])->name('admin.pengalaman.destroy');
});

// Rute untuk data tour admin
Route::middleware(['auth:admin'])->group(function () {
    Route::get('admin/tour', [AdminTourController::class, 'index'])->name('admin.tour.index');
    Route::get('admin/tour/create', [AdminTourController::class, 'create'])->name('admin.tour.create');
    Route::post('admin/tour', [AdminTourController::class, 'store'])->name('admin.tour.store');
    Route::get('admin/tour/{tour}/edit', [AdminTourController::class, 'edit'])->name('admin.tour.edit');
    Route::put('admin/tour/{tour}', [AdminTourController::class, 'update'])->name('admin.tour.update');
    Route::delete('admin/tour/{tour}', [AdminTourController::class, 'destroy'])->name('admin.tour.destroy');
});
