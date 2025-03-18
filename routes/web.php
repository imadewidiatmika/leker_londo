<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\LocationController;
use App\Models\Products; 

Route::get('/', function () {
    return view('index');
})->name('home');  // Menambahkan nama route 'home'

Route::get('/product', [ProductsController::class, 'index']);


Route::post('/deals', [DealController::class, 'store'])->name('deals.store');

Route::get('/callus', function () {
    return view('callus');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/franchise', function () {
    return view('franchise');
});



Route::get('/career', [CareerController::class, 'index']);
Route::get('/location', [LocationController::class, 'index']);


Route::post('/callus', [ContactController::class, 'store'])->name('callus.store');