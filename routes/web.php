<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;

// Home page untuk semua pengunjung (guest dan authenticated users)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Guest Routes (hanya bisa diakses jika belum login)
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// Public Routes (bisa diakses semua)
Route::get('/regulation', function () {
    return view('regulation.regulation');
})->name('regulation');

// Regulasi setiap negara
Route::get('/regulation/countries/filipina', function () {
    return view('regulation.countries.filipina');
})->name('regulation.countries.filipina');

Route::get('/regulation/countries/thailand', function () {
    return view('regulation.countries.thailand');
})->name('regulation.countries.thailand');

Route::get('/regulation/countries/vietnam', function () {
    return view('regulation.countries.vietnam');
})->name('regulation.countries.vietnam');

Route::get('/regulation/countries/myanmar', function () {
    return view('regulation.countries.myanmar');
})->name('regulation.countries.myanmar');

Route::get('/regulation/countries/singapura', function () {
    return view('regulation.countries.singapura');
})->name('regulation.countries.singapura');

Route::get('/regulation/countries/malaysia', function () {
    return view('regulation.countries.malaysia');
})->name('regulation.countries.malaysia');

Route::get('/regulation/countries/laos', function () {
    return view('regulation.countries.laos');
})->name('regulation.countries.laos');

Route::get('/regulation/countries/kamboja', function () {
    return view('regulation.countries.kamboja');
})->name('regulation.countries.kamboja');

Route::get('/regulation/countries/brunei', function () {
    return view('regulation.countries.brunei');
})->name('regulation.countries.brunei');

Route::get('/regulation/countries/timorleste', function () {
    return view('regulation.countries.timorleste');
})->name('regulation.countries.timorleste');


// Tambahkan group middleware untuk seller
Route::middleware(['auth', 'seller'])->group(function () {
    // Complete profile routes
    Route::get('/seller/complete-profile', [SellerController::class, 'showProfileForm'])
        ->name('seller.complete-profile');
    Route::post('/seller/complete-profile', [SellerController::class, 'completeProfile']);

    // Product routes (untuk upload product)
    Route::get('/seller/products/create', [ProductController::class, 'create'])
        ->name('seller.products.create');
    Route::post('/seller/products', [ProductController::class, 'store'])
        ->name('seller.products.store');

    // Profile routes
    Route::get('/seller/profile', [SellerController::class, 'profile'])->name('profile.show');

    // Store routes
    Route::get('/seller/store', [SellerController::class, 'store'])->name('seller.store');
});

// Route untuk halaman commodity
Route::get('/commodity', function () {
    return view('commodity');
})->name('commodity');


// // Seller routes yang perlu authentication dan middleware seller
// Route::middleware(['auth', 'seller'])->group(function () {
//     // Profile routes
//     Route::get('/seller/complete-profile', [SellerController::class, 'showProfileForm'])
//         ->name('seller.complete-profile');
//     Route::post('/seller/complete-profile', [SellerController::class, 'completeProfile']);

//     // Dashboard route
//     Route::get('/seller/dashboard', [SellerController::class, 'dashboard'])
//         ->name('seller.dashboard');

//     // Store route
//     Route::get('/seller/store', [SellerController::class, 'store'])
//         ->name('seller.store');

//     Route::prefix('seller/products')->group(function () {
//         Route::get('/create', [ProductController::class, 'create'])
//             ->name('seller.products.create');
//         Route::post('/', [ProductController::class, 'store'])
//             ->name('seller.products.store');
//         Route::get('/{product}/edit', [ProductController::class, 'edit'])
//             ->name('seller.products.edit');
//         Route::put('/{product}', [ProductController::class, 'update'])
//             ->name('seller.products.update');
//         Route::delete('/{product}', [ProductController::class, 'destroy'])
//             ->name('seller.products.destroy');
//     });
// });







