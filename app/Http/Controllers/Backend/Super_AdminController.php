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


    /************************************
     * Dashboard: backend.admin.dashboard1
     ***********************************/
    public function dashboard()
    {
    return view('backend.admin.dashboard');
    }

/************************************
     * Dashboard: backend.admin.dashboard2
     ***********************************/
  public function dashboard2()
    {
    return view('backend.admin.dashboard2');
    }
/************************************
     * Dashboard: backend.admin.dashboard3
     ***********************************/
  public function dashboard3()
    {
    return view('backend.admin.dashboard3');
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
