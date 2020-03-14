<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;

class UserController extends Controller
{
    public function index(){
        return view('/index');
    }
    public function login(){

        return view('backend/module/pages/adminlogin');
    }
    public function authenticate(Request $request){

        if (Auth::attempt(['email' => $request->email, 'password' =>$request->password])) {
            // Authentication passed...
            session ( [ 
                'name' => $request->get( 'username' ) 
        ] );
           
            $user = Auth::User()->name;
            return redirect('/admin');
        }
        else{
            return redirect()->back();
        }
    }
    public function logout(){

        Auth::logout();
        return redirect('/adminlogin');
    }
    public function allview(){

        $users=User::all()->where('status',1);
        return view('backend/module/user/AllUser', compact('users'));
    }
    public function create(){
        return view('backend/module/user/AddUser');
    }
    public function store(Request $request){
        $u=new User();
        $u->name=$request->name;
        $u->email=$request->email;
        $u->password=Hash::make($request->password);
        $u->address=$request->address;
        $u->status= 1;
        $file = $request->file('image');
        $image = $file->getClientOriginalName();
        $destination = public_path('/images/');
        $file->move($destination, $image);
        $u->image = $image;
        $u->save();
        Session::flash('message','User Save Successfully');
        return redirect()->back();
    }
    public function edit($id){

        $u=User::find($id);
        return view('backend/module/user/EditUser', compact('u'));
    }
    public function update(Request $request){
        $id=$request->id;
        $u=User::find($id);
        $u->name=$request->name;
        $u->email=$request->email;
        $u->password=Hash::make($request->password);
        $u->address=$request->address;
        $file = $request->file('image');
        $image = $file->getClientOriginalName();
        $destination = public_path('/images/');
        $file->move($destination, $image);
        $u->image = $image;
        $u->update();
        Session::flash('message','User Updated Successfully');
        return redirect('user/alluser');
    }
    public function destroy($id){

        $u=User::find($id);
        $u->delete();
        Session::flash('message','User Delete Successfully');
        return redirect()->back();
    }
    public function blockview(){

        $users=User::all()->where('status',0);
        return view('backend/module/user/BlockUser', compact('users'));
    }
    public function blockuser($id){

        $u=User::find($id);
        $u->status=0;
        $u->update();
        $users=User::all()->where('status',1);
        Session::flash('message','User Block Successfully');
        return view('backend/module/user/AllUser', compact('users'));
    }
    public function activeuser($id){

        $u=User::find($id);
        $u->status=1;
        $u->update();
        Session::flash('message','User Active Successfully');
        return redirect()->back();
    }
    
}
