<?php



/*******
*Models
*********/
use App\Models\Post;
use App\Models\User;
use App\Models\Address;
use App\Models\Admin;
use App\Models\Front;
use App\Models\Post_tag;
use App\Models\Tag;
/**************
*Controllers
***************/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\Super_AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\Post_tagController;
use App\Http\Controllers\Backend\AddressController;
use App\Http\Controllers\Backend\ImageUploadController;


/****************************
|--------------------------------------------------------------------------
| Web Routes:
using callback function: Route::get('/', function () {return view ('welcome'); } );
using Controller: Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

|--------------------------------------------------------------------------
Group of Controllers:
Route::middleware('test')->name('frontend.')->namespace('Frontend')->group(function(){ routes here    });
Route::middleware('test')->name('backend.')->namespace('Backend')->group(function(){ routes here  });
*/
// Route::get('/insert', function () {
//  $data=[
//     'username'=>'karim',
//     'email'=>'mdkarim66@yahoo.com',
//     'password'=>'12344321',
//     'created_at'=>now(),
//     'updated_at'=>now()
//    ];
//    Admin::insert($data);
//    return "User Create Successfully";
//    });
/*******************
Active Route Frontend
*********************/

Route::name('frontend.')->namespace('Frontend')->group(function(){

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');

});

/*******************
Active Route Backend
********************/
Route::middleware('test')->name('backend.')->namespace('Backend')->group(function(){

//Dashboard

Route::get('/dashboard', [Super_AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard2', [Super_AdminController::class, 'dashboard2'])->name('dashboard2');
Route::get('/dashboard3', [Super_AdminController::class, 'dashboard3'])->name('dashboard3');

//Session
Route::get('/login', [AdminController::class, 'index'])->name('login');
Route::post('/check', [AdminController::class, 'check']);
Route::get('/logout', [Super_AdminController::class, 'logout'])->name('logout');
Route::get('/add_category', [Super_AdminController::class, 'addCategory'])->name('addCategory');

//user
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/add_user', [UserController::class, 'addUser'])->name('addUser');
Route::get('/create', [UserController::class, 'create'])->name('create');
Route::post('/store', [UserController::class, 'store'])->name('store');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [UserController::class, 'update'])->name('update');
Route::post('/delete/{id}', [UserController::class, 'delete'])->name('delete');

//files upload
Route::view('file-upload','upload.image');
Route::post('/file-upload', [ImageUploadController::class, 'store'])->name('imageUpload');
Route::get('/files', [ImageUploadController::class, 'files'])->name('files');
Route::get('/delete-file', [ImageUploadController::class, 'delete'])->name('fileDelete');
});


/*************************************************
*For one_to_one relation create function in User.php ie, User Model
*****************************************************************
  public function address(){
        return $this->hasOne(Address::class);
    }
Inversely:write function in Address.php
****************************************
 public function user(){
        return $this->belongsTo(User::class);
    }
}
using controller:check
********************
  public function one_to_one()
    {
        echo '<pre>';
        $user=User::find(1);
       echo $user->name.'<br>';
       echo $user->email.'<br>';
       echo $user->address->country.'<br>';
    }
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
    'user_id'=>3,
    'state'=>'Chapai',
    'city'=>'Chittagong',
    'country'=>'Bangladesh'
   ];
   Address::insert($data);
   return "User Create Successfully";
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