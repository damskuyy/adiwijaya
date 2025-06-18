<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('fe.master');
// });

Route::resource('/', App\Http\Controllers\HomeController::class);
Route::resource('/home', App\Http\Controllers\HomeController::class);
Route::resource('/about', App\Http\Controllers\AboutController::class);
Route::resource('/services', App\Http\Controllers\LayananController::class);
Route::resource('/product', App\Http\Controllers\ProductController::class);
Route::resource('/gallery', App\Http\Controllers\GalleryController::class);
Route::resource('/contact', App\Http\Controllers\ContactController::class);
Route::post('/send-email', [ContactController::class, 'send'])->name('send.email');
Route::resource('/tools', App\Http\Controllers\ToolsController::class);