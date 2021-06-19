<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
Route::get('/', function () {return view ('welcome'); } );

*/

Route::name('frontend.')->namespace('Frontend')->group(function(){

Route::get('/', [HomeController::class, 'index'])->name('about')->name('home');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/about', [FrontController::class, 'about'])->name('about');

});

Route::name('backend.')->namespace('Backend')->group(function(){

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard2', [AdminController::class, 'dashboard2'])->name('dashboard2');
Route::get('/dashboard3', [AdminController::class, 'dashboard3'])->name('dashboard3');



Route::get('/create_user', [UserController::class, 'create'])->name('create');

//Route::get('/orm', [PostController::class, 'create'])->name('create');

});



/*
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


Route::get('add-post', function() {
		
	$post = new Post();
	$post->title = 'This is title';
	$post->description = 'This is description';
	$post->user_id = 1;
	$post->status = 1;
	
	$post->save();

});
*/