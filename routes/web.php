<?php

use App\Http\Controllers\site\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/about', [HomeController::class, 'about'])->name('site.about');
Route::get('/resume', [HomeController::class, 'resume'])->name('site.resume');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('site.portfolio');
Route::get('/contact', [HomeController::class, 'contact'])->name('site.contact');
Route::post('/contact/store', [HomeController::class, 'storeContactUs'])->name('contact-us.store');
Route::get('/social', [HomeController::class, 'social'])->name('site.social');
Route::get('/portfolio_details/{id}', [HomeController::class, 'portfolioDetails'])->name('portfolio.details');


