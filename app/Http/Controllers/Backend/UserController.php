<?php

namespace App\Http\Controllers\Backend;
use DB;
use App\Models\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
