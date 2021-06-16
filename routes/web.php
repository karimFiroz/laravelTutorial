<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontController;
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

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/users', [FrontController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [FrontController::class, 'show'])->name('users.show');

});


Route::name('backend.')->namespace('Backend')->group(function(){

Route::get('/contact', [AdminController::class, 'index'])->name('index');
Route::get('/user/{id}/{name}', [AdminController::class, 'user'])->name('user');

});