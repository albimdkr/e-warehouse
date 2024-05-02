<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductInController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::controller(ProductInController::class)->prefix('products_in')->group(function () {
        Route::get('', 'index')->name('products_in');
        Route::get('create', 'create')->name('products_in.create');
        Route::post('store', 'store')->name('products_in.store');
        Route::get('show/{id}', 'show')->name('products_in.show');
        Route::get('edit/{id}', 'edit')->name('products_in.edit');
        Route::put('edit/{id}', 'update')->name('products_in.update');
        Route::delete('destroy/{id}', 'destroy')->name('products_in.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    Route::get('products_in/productsStockPrint', [ProductInController::class, 'productStockPrintPDF'])->name('products_in.productsStockPrint');
    Route::get('/products_in/total-print', [ProductInController::class, 'totalProductsPrintPDF'])->name('products_in.totalProductsPrint');
});

// Route::middleware(['auth', 'CheckLevel:admin'])->group(function () {
//     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });