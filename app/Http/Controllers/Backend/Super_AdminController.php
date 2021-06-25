<?php

namespace App\Http\Controllers\Backend;
use DB;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Super_AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
    //
    }
public function addCategory(){
    $this->authCheck();
    return view('backend.admin.add_category');
}

    /************************************
     * Dashboard: backend.admin.dashboard1
     ***********************************/
    public function dashboard()
    {
         $this->authCheck();
    return view('backend.admin.dashboard');
    }

/************************************
     * Dashboard: backend.admin.dashboard2
     ***********************************/
  public function dashboard2()
    {
        $this->authCheck();
    return view('backend.admin.dashboard2');
    }
/************************************
     * Dashboard: backend.admin.dashboard3
     ***********************************/
  public function dashboard3()
    {
        $this->authCheck();
    return view('backend.admin.dashboard3');
    }


    
    private function authCheck(){
$id=Session::get('id');
if($id !=NULL){
return;
    }else{
        return redirect()->to('login')->send();
    }
}


public function logout(){
    Session::put('id','');
    Session::put('username','');
    Session::put('message','You are successfully logout!!');
    return redirect()->to('login')->send();
    return view('backend.admin.login');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
