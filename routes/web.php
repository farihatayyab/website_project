<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MortgageController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\UserDetailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/information', [InformationController::class, 'index'])->name('information');

Route::post('/information/store', [InformationController::class, 'store'])->name('information.store');





//Route::get('/en/mortgage-products-services', [MortgageController::class, 'showMortgage'])->name('mortgage_products');
