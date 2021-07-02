<?php

namespace App\Http\Controllers\Backend;
use App\Models\Group;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
session_start();
class GroupController extends Controller
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
public function groups()
    {
        $this->data['groups']=Group::all();
        return view('backend.group.groups',$this->data);
    }


    public function create()
    {
       return view('backend.group.create');
    }


    public function store(Request $request)
    {
     $formData=$request->all();
    if(Group::create($formData)){
         Session::flash('message','Group created successfully!');
    }
     return redirect()->to('groups');
    }


     public function destroy($id)
    {
   if(Group::find($id)->delete()){
    Session::flash('message','Group Deleted successfully!');
    return redirect()->to('groups');
   }
    }
  
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
   
}
