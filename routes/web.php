<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/listhotel', function () {
    return view('listhotel');
});

Route::resource('hotel', HotelController::class);

Route::get('/index', [HotelController::class, 'index'])->name('index');
