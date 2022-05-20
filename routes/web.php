<?php

use App\Http\Controllers\BioskopController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\paymentController;
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

// Route::get('/', [MainController::class, 'index']);
Route::view('/', 'theme');
Route::view('/theme', 'theme');
Route::view('/cv', 'cv');

// payment
Route::get('/pay', [paymentController::class, 'index']);


Route::prefix('/cookie')->group(function () {
    Route::get('/set', [CookieController::class, 'setC']);
    Route::get('/get', [CookieController::class, 'getC']);
    Route::get('/remove', [CookieController::class, 'remC']);
});

Route::prefix('/bioskop')->group(function () {
    Route::get('/beli', [BioskopController::class, 'beli']);
    Route::get('/masuk', [BioskopController::class, 'masuk']);
    Route::get('/aula', [BioskopController::class, 'aula']);
    Route::get('/diluar', [BioskopController::class, 'diluar']);
});

Route::get('/e-{any}', [MainController::class, 'getLink']);
