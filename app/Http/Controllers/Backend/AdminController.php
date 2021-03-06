<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();
class AdminController extends Controller
{
    /*************************************
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     ***********************************/

    public function index(){

 
     return view('backend.admin.login');
    }

     public function check(Request $request){
        $username=$request->username;
        $email=$request->email;
        $password=$request->password;
            $result=DB::table('admins')
            ->where('email',$email)
            ->where('password',$password)
            ->first();
            if($result){
    Session::put('id',$result->id);
    Session::put('username',$result->username); 
    return redirect()->to('dashboard');
}else{
    Session::put('exception','Your Email Or Password Invalide!!');
   return redirect()->to('login'); 
}
     return view('backend.admin.login');
    }



private function authCheck(){
    $id=Session::get('id');
    if($id ==NULL){
        return;
    }else{
        return redirect()->to('login')->send();
    }
}


  

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
