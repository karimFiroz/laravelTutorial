<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //echo  $request->file('image')->getClientOriginalName();
    // echo  $request->file('image')->extension();
        $path=$request->file('image')->store('images','public');
        return $path;
    }
 
public function files(){
   //echo $url=Storage::url('images/LHC0p2id7wVyMQgU2cwtlVByopyIfKCGg3LcQE0J.jpg');
   echo $url=asset(Storage::url('images/LHC0p2id7wVyMQgU2cwtlVByopyIfKCGg3LcQE0J.jpg'));
    echo "<img src='$url'/>";
}


 public function delete()
    {
         Storage::delete('public/images/VfDonp1Coq2KjhXjGJZlCjxPGjcUcjSrF7zAgBkv.jpg');
         echo 'delete-file';
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
