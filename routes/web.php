<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\TrackController;
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

Route::match(['GET', 'POST'], '/home', [HomeController::class,'index'])->name('home');

Route::match(['GET', 'POST'], '/signup', [UserController::class,'index']);
Route::match(['GET', 'POST'], '/signup', [UserController::class,'store']);

Route::match(['GET', 'POST'], '/login', [LoginController::class,'index'])->name('login');
Route::match(['GET', 'POST'],'/login', [LoginController::class,'store']);

Route::match(['GET', 'POST'], '/quote', [QuoteController::class, 'store']);
Route::match(['GET', 'POST'], '/placed/{param}', [QuoteController::class, 'index'])->name('success');
Route::match(['GET', 'POST'], '/viewquotes', [QuoteController::class, 'view']);
Route::match(['GET', 'POST'], '/updatequote/{quote}', [QuoteController::class, 'update'])->name('update');


Route::get('/track', function (){
  return view('trackstatus');
})->name('trackst');

Route::match(['GET', 'POST'], '/track', [TrackController::class, 'store'])->name('trackstatus');

Route::match(['GET', 'POST'], '/contact', [ContactController::class, 'index']);
Route::match(['GET', 'POST'], '/contact', [ContactController::class, 'store'])->name('contact');
Route::match(['GET', 'POST'], '/viewcontacts', [ContactController::class, 'view'])->name('viewcontacts');

Route::match(['GET', 'POST'], '/about', [AboutController::class, 'index']);

// Route::get('/adminsignup', [AdminController:: class, 'index']);
Route::match(['GET', 'POST'], '/adminlogin', [AdminController:: class, 'index']);
Route::match(['GET', 'POST'], '/adminlogin', [AdminController:: class, 'store'])->name('adminstore');
Route::match(['GET', 'POST'], '/dashboard', [AdminController:: class, 'dashboard'])->name('dashboard');
Route::match(['GET', 'POST'], '/calculator', [AdminController:: class, 'calcview']);
Route::match(['GET', 'POST'], '/calculator', [AdminController:: class, 'calcedit'])->name('calculator');

Route::match(['GET', 'POST'], '/blog', [BlogController::class, 'index']);

Route::match(['GET', 'POST'], '/blogform', [BlogController::class, 'viewform']);
Route::match(['GET', 'POST'], '/blogform', [BlogController::class, 'store'])->name('blogstore');
Route::match(['GET', 'POST'], '/blogdetails/{id}', [BlogController::class, 'readmore']);

