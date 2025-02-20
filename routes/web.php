<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
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
Route::get('/en/mortgage-products-services', [PageController::class, 'show'])->name('mortgage.products');


