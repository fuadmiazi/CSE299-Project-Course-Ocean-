<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

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
            return view('user.home');
        }
    }

    public function index()
    {
        return view('user.home');
    }
}
