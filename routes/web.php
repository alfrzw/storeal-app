<?php

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/our-products', function () {
    $products = [
        [
            "product" => "Jam Tangan Apple Keren V3.1",
            "category" => "1",
            "price" => "2000000",
            "stock" => "23"
        ],
        [
            "product" => "Jam Tangan Samsung Bagus Sekali V2",
            "category" => "1",
            "price" => "3500000",
            "stock" => "27"
        ],
        [
            "product" => "Jam Tangan Xiaomi Keren Banget V4.1",
            "category" => "1",
            "price" => "1890000",
            "stock" => "12"
        ],
        [
            "product" => "Jam Tangan Apple Keren Banget V5.1",
            "category" => "1",
            "price" => "3300000",
            "stock" => "18"
        ],
    ];

    return view('ourprod', [
        "title" => "Our Products",
        "products" => $products
    ]);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
