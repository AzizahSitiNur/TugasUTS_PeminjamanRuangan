<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\LaporanController;
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
    return view('user/home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('ruangans', RuanganController::class);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/home', function () {
        return view('admin.home');
    })->name('admin.home')->middleware('is_admin'); 
    Route::get('/user/home', function () {
        return view('user.home');
    })->name('user.home')->middleware('is_user');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/user/ruangan', [RuanganController::class, 'indexUser'])->name('user.ruangan.index');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/laporan/export', [LaporanController::class, 'exportPdf'])->name('laporan.export');
});
require __DIR__.'/auth.php';
