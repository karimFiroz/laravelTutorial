<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
Route::get('/', function () {return view ('welcome'); } );
Route::get('/user', [FrontController::class, 'index']);
|
*/
//Route::get('/', function () {return view ('backend.master3'); } );


Route::name('frontend.')->namespace('Frontend')->group(function(){


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');


});


Route::name('backend.')->namespace('Backend')->group(function(){


Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard2', [AdminController::class, 'dashboard2'])->name('dashboard2');
Route::get('/dashboard3', [AdminController::class, 'dashboard3'])->name('dashboard3');

Route::get('/create_user', [UserController::class, 'create'])->name('create_user');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/delete/{id}', [UserController::class, 'delete']);

});