<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

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

// Route::get('/admin', function () {

//     return view('pages.index');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::resource('/', LandingController::class);
Route::get('/cart', [LandingController::class, 'cart']);
Route::get('/checkout', [LandingController::class, 'checkout']);
Route::get('/shop', [LandingController::class, 'shop']);
Route::get('/single-product', [LandingController::class, 'single_product']);

Route::resource('/admin', DashboardController::class);
Route::resource('/product', ProductController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/brand', BrandController::class);


Route::get('/stock', [DashboardController::class, 'stock']);
Route::get('/order', [DashboardController::class, 'order']);


// require __DIR__ . '/auth.php';
