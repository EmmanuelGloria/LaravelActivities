<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class UserController extends Controller
{
    
    public function index(){

         $users = User::get();   
         return view('users.index', compact('users'));

     }
     public function show($id){

        $user = User::where('id',$id)->first();
        return view('users.show',compact('user'));

    }
}
