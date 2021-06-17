<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
Route::get('/', function () {return view ('welcome'); } );
Route::get('/user', [FrontController::class, 'index']);
|
*/
Route::name('frontend.')->namespace('Frontend')->group(function(){


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');


});


Route::name('backend.')->namespace('Backend')->group(function(){


Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


});