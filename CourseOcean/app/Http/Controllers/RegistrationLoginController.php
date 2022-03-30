<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use Exception;

class RegistrationLoginController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function registration()
    {
        return view("auth.registration");
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

    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password))
            {
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail','This password is incorrect');
            }
        }
        else{
            return back()->with('fail','This email is not registered');
        }
    }

    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('dashboard',compact('data'));
    }


}
