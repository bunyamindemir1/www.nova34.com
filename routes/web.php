<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PlatformController::class,'index'])->name('home');
Route::get('/{lang}', [\App\Http\Controllers\PlatformController::class, 'change'])->name('changeLang');

// İletişime kayıt ekleme
Route::post('/contact-us', [\App\Http\Controllers\ContactController::class,'store'])->name('contact-us');
