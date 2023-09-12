<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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
    return view('welcome');
});

// use App\Http\Controllers\AboutController;

// Route::get('/about', [AboutController::class, 'index']);


Route::get('/buku', [BukuController::class, 'index']);

Route::get('/about', function () {
    return view('about',[
        "name" => "hanifsauqi",
        "email" => "hanifsauqi@gmail.com",
        "nohp" => "098567349876",
        "alamat" => "Yogyakarta"
    ]);
});

// Route::get('/buku', 'BukuController@index');
 
// Route::controller(OrderController::class)->group(function () {
//     Route::get('/orders/{id}', 'show');
//     Route::post('/orders', 'store');
// });
