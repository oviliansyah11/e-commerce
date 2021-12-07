<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/cart', [LandingController::class, 'cart']);
Route::get('/checkout', [LandingController::class, 'checkout']);
Route::get('/shop', [LandingController::class, 'shop']);
Route::get('/single-product', [LandingController::class, 'single_product']);
Route::resource('/', LandingController::class);
