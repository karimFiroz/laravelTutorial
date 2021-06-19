<?php
/*******
*Models
*********/
use App\Models\Post;
use App\Models\User;
/**************
*Controllers
***************/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PostController;
/****************************
|--------------------------------------------------------------------------
| Web Routes:
using callback function: Route::get('/', function () {return view ('welcome'); } );
using Controller: Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

|--------------------------------------------------------------------------
Group of Controllers:
Route::name('frontend.')->namespace('Frontend')->group(function(){ routes here    });
Route::name('backend.')->namespace('Backend')->group(function(){ routes here  });

//Test:
Route::get('/edit/{id}', function ($id) {
$user=User::find($id);
        $user->name='SarkarFiroz';
        $user->email='karim_firoz@yahoo.com';
        $user->password='esif4@cc';
        $user->save();
        return 'Data Edited';
	 });
/*****************************************************************
Active Route
**********************************************************************/
Route::name('frontend.')->namespace('Frontend')->group(function(){

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');

});

Route::name('backend.')->namespace('Backend')->group(function(){

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard2', [AdminController::class, 'dashboard2'])->name('dashboard2');
Route::get('/dashboard3', [AdminController::class, 'dashboard3'])->name('dashboard3');

});
/************************************
*Delete Data
*********************************
Route::get('/delete/{id}', function ($id) {
$user = User::findOrFail($id);
        $user->delete();
        return 'Deleted';
	 });
/******************************
*Show Data/Read
**************************
Route::get('/show/{id}', function ($id) {
 $user = User::find($id);
        return $user;
	 });
**************************/
/*************************
*Edit Data/Update Data
***************************
Route::get('/edit/{id}', function ($id) {
$user=User::find($id);
        $user->name='SarkarFiroz';
        $user->email='karim_firoz@yahoo.com';
        $user->password='esif4@cc';
        $user->save();
        return 'Data Edited';
	 });
/***********************
*Create/Insert data:
***************************
Route::get('/insert', function () {
 $data=[
    'name'=> 'FirozMonira',
    'email'=>'firozmonira@yahoo.com',
    'password'=>'1234554321'
   ];
   User::create($data);
   return "User Create Successfully";
    //data input into users table
	 });
********************************
Route::get('/orm', function () {
$data=[
'title'=>'Firoz Learning Home',
'user_id'=>2,
'description'=>'I am learning Laravel from Youtube tutorial',
'status'=>0
    ];
DB::table('posts')->insert($data);
//Post::create('$data');
return 'Post inserted';
	 });
|

|Insert
Route::get('add-post', function() {
		
	$post = new Post();
	$post->title = 'This is title';
	$post->description = 'This is description';
	$post->user_id = 1;
	$post->status = 1;
	
	$post->save();

});
|Delete
Route::get('delete-post', function() {
	// $post = Post::findOrFail(4);
	// $post->delete();

	// Post::destroy([6, 7, 8]);

	Post::where('status', 0)->delete();
});
*/