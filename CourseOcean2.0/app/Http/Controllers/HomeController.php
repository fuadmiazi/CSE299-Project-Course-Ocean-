<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Course;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $userType=Auth::user()->userType;
        
        if($userType=='admin')
        {
            return view('admin.home');
        }
        else
        {
            $data = course::paginate(3);

            return view('user.home',compact('data'));
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
            $data = course::paginate(3);

            return view('user.home',compact('data'));
        }

    }
}
