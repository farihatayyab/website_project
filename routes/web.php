<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductServiceController;
use App\Http\Controllers\InformationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/information', [InformationController::class, 'index'])->name('information');
Route::post('/information/store', [InformationController::class, 'store'])->name('information.store');

Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/faqs', [PageController::class, 'faqs'])->name('faqs');
Route::get('/tips-trends', [PageController::class, 'tipsTrends'])->name('tips-trends');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');

// Route to display the product service form
Route::get('/en/mortgage-products-services', [ProductServiceController::class, 'productservice'])->name('mortgage.products');

// // First validation route (POST) for the product service form
Route::post('/product-service', [ProductServiceController::class, 'store'])->name('productservice.store');

// Next step route
Route::get('/next-step', [ProductServiceController::class, 'nextstep'])->name('next.step');

// // second validation route (POST) for the product service form
Route::post('/productservice-secondstore', [ProductServiceController::class, 'storevalidation'])->name('productservice.secondstore');

// Next step route
Route::get('/last-step', [ProductServiceController::class, 'laststep'])->name('last.step');

Route::post('/submit-form', [ProductServiceController::class, 'submitForm'])->name('productservice.thirdstore');



            