<?php

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
    return view('welcome');
});

// use App\Http\Controllers\AboutController;

// Route::get('/about', [AboutController::class, 'index']);

Route::get('/about', function () {
    return view('about',[
        "name" => "hanifsauqi",
        "email" => "hanifsauqi@gmail.com",
        "nohp" => "098567349876",
        "alamat" => "Yogyakarta"
    ]);
});
