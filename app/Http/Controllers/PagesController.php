<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function index($id){

        $u=User::find($id);
        return view('backend/module/pages/profile', compact('u'));
    }
    public function profileview(){

        $users=User::all();
        return view('backend/module/pages/contact', compact('users'));
    }
    public function gallery(){

        return view('backend/module/pages/gallery');
    }
    
}
