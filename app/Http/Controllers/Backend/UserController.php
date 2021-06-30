<?php

namespace App\Http\Controllers\Backend;
use DB;
use Session;
session_start();
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Address;
use App\Models\Tag;
use App\Models\User;
class UserController extends Controller
{
    
    public function index()
    {
         $this->authCheck();
      $users=User::all(); 
    return view('backend.admin.users')->with('users', $users);
    }



    public function addUser()
    {
   
        return view('backend.admin.add_user');
    }


   
    public function create()
    {
   return view('backend.admin.add_user');
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
        return redirect()->route('backend.users');
    }


    public function edit($id)
    {
       $users= User::find($id);

   return view('backend.admin.edit')->with('user',$users);
    }


    public function update(Request $request, $id)
    {
        $user=User::find($id);
        
         $user->admin_id=$request->admin_id;
        $user->group_id=$request->group_id;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->save();
        
       return redirect()->route('backend.users');
    }


    public function show($id)
    {
        //SELECT * FROM users WHERE id=$id;
        $user = User::find($id);
        return $user;
    }


    public function delete($id)
    {
       
            $user=User::find($id);
    
            $user->delete();
       return redirect()->route('backend.users');
    }
    
    
    public function destroy($id)
    {
        //
    }

       private function authCheck(){
$id=Session::get('id');
if($id !=NULL){
return;
    }else{
        return redirect()->to('login')->send();
    }
}





}
