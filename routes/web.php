<?php

use Illuminate\Support\Facades\Route;

// Rute untuk menampilkan landing page
Route::get('/', function () {
    return view('welcome'); // Mengembalikan view Blade bernama 'welcome'
})->name('home');

// Rute-rute lain yang mungkin Anda miliki, contoh:
// Route::get('/about', function () {
//     return view('about');
// });

// Jika Anda sebelumnya memiliki rute Inertia yang ingin Anda nonaktifkan/hapus:
// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard'); // Hapus atau komentari ini jika tidak pakai Inertia
// })->middleware(['auth', 'verified'])->name('dashboard');

// Require file rute lainnya jika ada
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';