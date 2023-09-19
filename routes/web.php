<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\LoadBookController;
use App\Http\Controllers\SiteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[SiteController::class,'index'])->name('site');
Route::get('/donar', SiteController::class)->name('donar');


Route::resource('books', BooksController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('load', LoadBookController::class)->middleware('auth');