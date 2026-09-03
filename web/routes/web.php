<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/produk', [PageController::class, 'products'])->name('products');
Route::get('/produk/{product:slug}', [PageController::class, 'productDetail'])->name('product.detail');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/toko-kami', [PageController::class, 'stores'])->name('stores');
Route::get('/pengiriman-dan-pemesanan', [PageController::class, 'shipping'])->name('shipping');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');
