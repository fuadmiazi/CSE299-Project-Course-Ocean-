<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Course;

use App\Models\Cart;

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

    public function search(Request $request)
    {
        $search = $request->search;

        if($search=='')
        {
            $data = course::paginate(3);

            return view('user.home',compact('data'));
        }

        $data = course::where('title','Like','%'.$search.'%')->get();

        return view('user.home',compact('data'));
    }

    public function addToCart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user=auth()->user();  
            
            $course = course::find($id);

            $cart = new cart;

            $cart->name = $user->name;
            $cart->email = $user->email;

            $cart->course_title = $course->title;
            $cart->price = $course->price;

            $cart->save();



            return redirect()->back()->with('message','Added To Cart Successfully');
        }
        else
        {
            return redirect('login');
        }
    }
}
