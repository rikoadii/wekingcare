<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\WekingcareController;
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


Route::get('/', [WekingcareController::class, 'index'])->name('home');
Route::get('/pricing', [WekingcareController::class, 'pricing'])->name('pricing');
Route::get('/book/{id}', [WekingcareController::class, 'book'])->name('book');
Route::get('/contact', [WekingcareController::class, 'contact'])->name('contact');

// Tampilkan formulir login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [LoginController::class, 'login']);

// Proses logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Resource controller untuk /dashboard
Route::resource('/dashboard', LayananController::class)->middleware('auth');



