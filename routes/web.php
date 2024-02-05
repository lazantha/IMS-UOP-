<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;


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

Route::get('templates/', [HomeController::class, 'home'])->name('home-page');
Route::get('templates/contact', [ContactController::class, 'contact'])->name('contact-page');
Route::get('templates/about', [AboutController::class, 'about'])->name('about-page');
Route::post('templates/', [AdminController::class, 'signUp'])->name('sign-up');
Route::post('templates/', [AdminController::class, 'signIn'])->name('sign-in');


