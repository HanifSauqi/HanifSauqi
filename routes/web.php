<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerumahanControllers;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome',);
});
Route::get('/perumahan',[PerumahanControllers::class,'listRumah']);


Route::get('/layout', function () {
    return view('layout', [
        "name" => "lala",
        "email" => "lala@gmail.com"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "lala",
        "email" => "lala@gmail.com"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "name" => "lala",
        "email" => "lala@gmail.com"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "name" => "lala",
        "email" => "lala@gmail.com"
    ]);
});

Route::get('/boom',[PostController::class,'boomsport']);

Route::get('/buku',[BukuController::class,'index']);

Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::post('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
//update
Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
//store update
Route::post('/buku/update/{id}', [BukuController::class, 'update'])->name('buku.update');

Route::get('/student', [StudentController::class, 'index']);