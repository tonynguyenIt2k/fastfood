<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\MainController::class, 'about'])->name('about');
Route::get('/service', [App\Http\Controllers\MainController::class, 'service'])->name('service');
Route::get('/menu', [App\Http\Controllers\MainController::class, 'menu'])->name('menu');
Route::get('/booking', [App\Http\Controllers\MainController::class, 'booking'])->name('booking');
Route::get('/review', [App\Http\Controllers\MainController::class, 'review'])->name('review');
Route::get('/team', [App\Http\Controllers\MainController::class, 'team'])->name('team');
Route::get('/contact', [App\Http\Controllers\MainController::class, 'contact'])->name('contact');