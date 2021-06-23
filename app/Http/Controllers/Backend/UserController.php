<?php

namespace App\Http\Controllers\Backend;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Address;
use App\Models\Tag;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return $users;
    }//Show all users

      public function one_to_one()
    {
       echo '<pre>';

        $user=User::find(1);
       echo $user->name.'<br>';
       echo $user->email.'<br>';
       echo $user->address->country.'<br>';
}

      public function one_to_many()
    {
        echo '<pre>';

$post = Post::find(2);
    echo $post->title . '<br/>';

    echo '<h2> Tags </h2>';
    foreach ($post->tags as $tag) {
        echo $tag->title . '<br/>';
    }

}
      public function one_to_many_inverse()
    {
        echo '<pre>';

$post = Post::find(2);
    echo $post->title . '<br/>';

    echo '<h2> Tags </h2>';
    foreach ($post->tags as $tag) {
        echo $tag->title . '<br/>';
    }

}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create user
    
   $data=[
    'name'=> 'Firoz',
    'email'=>'firo@yahoo.com',
    'password'=>'123321'
   ];
   User::create($data);
   return "User Create Successfully";
    }//data input into users table

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //SELECT * FROM users WHERE id=$id;
        $user = User::find($id);
        return $user;
    }




   public function delete($id)
    {  
        $user = User::findOrFail($id);
        $user->delete();
        return 'Deleted';
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        $user->name='karim Firoz';
        $user->email='karim_firoz@yahoo.com';
        $user->password='esif4@cc';
        $user->save();
        return 'Data Edited';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
