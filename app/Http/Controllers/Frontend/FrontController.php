<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Front;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
      $users=User::all(); 
    return view('frontend.front.users')->with('users', $users);
    }


    public function addUser()
    {
   
        return view('frontend.front.add_user');
    }


    public function create()
    {
   return view('frontend.front.add_user');
    }


    public function store(Request $request)
    {
        //Check validation
        $this->validate($request,[
'name'=>'required|string|max:15',
'password'=>'required|min:6' 

        ]);

        $user=new User;
        $user->admin_id=$request->admin_id;
        $user->group_id=$request->group_id;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->save();
        return redirect()->route('frontend.home');
    }


    
    public function edit($id)
    {
      
    }


    public function update(Request $request, $id)
    {
      
    }

    public function about()
    {
    return view('frontend.front.about'); 
    }

    
public function contact()
    {
    return view('frontend.front.contact');
    }
   
    public function show(Front $front)
    {
        //
    }

    public function destroy(Front $front)
    {
        //
    }
}
