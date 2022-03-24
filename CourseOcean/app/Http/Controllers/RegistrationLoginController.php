<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Hash;

class RegistrationLoginController extends Controller
{
    public function login(){
        return view("login");
    }
    public function registration(){
        return view("registration");
    }

    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'userType'=>'required',
            'password'=>'required|min:5|max:12'

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->userType = $request->userType;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res){
            return back()->with('success','You Have Registered Successfully');
        }
        else
        {
            return back()->with('fail','Oops Something Went Wrong!');
        }

    }
}
