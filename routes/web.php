<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route khusus untuk Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [ProductController::class, 'index'])->name('admin.dashboard');
});

// Route khusus untuk User Biasa
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return '<h1>Selamat Datang di Halaman USER BIASA</h1>';
    });
});

Route::delete('/reviews/{review}', function (App\Models\Review $review) {
    return '<h1>Ulasan berhasil dihapus!</h1>';
})->middleware(['auth', 'can:delete,review']);

require __DIR__.'/auth.php';
