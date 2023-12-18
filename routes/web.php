<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

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
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });




    Route::controller(CustomerController::class)->prefix('customer')->group(function () {
        Route::get('', 'index')->name('customer');
        Route::get('create', 'create')->name('customer.create');
        Route::post('store', 'store')->name('customer.store');
        Route::get('show/{id}', 'show')->name('customer.show');
        Route::get('edit/{id}', 'edit')->name('customer.edit');
        Route::put('edit/{id}', 'update')->name('customer.update');
        Route::delete('destroy/{id}', 'destroy')->name('customer.destroy');
    });


});
