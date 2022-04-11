<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

use App\Models\Order;

class AdminController extends Controller
{
    public function course()
    {
        return view('admin.product');
    }

    public function uploadCourse(Request $request)
    {
        $data = new course;

        $image = $request->file;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productimage',$imagename);

        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back()->with('message','Course Added Successfully!!!');
    }

    public function showcourse()
    {
        $data = course::all();



        return view('admin.showproduct',compact('data'));
    }

    public function deletecourse($id)
    {
        $data = course::find($id);

        $data->delete();

        return redirect()->back()->with('message','Course Deleted Successfully!!!');;
    }

    public function updateview($id)
    {
        $data = course::find($id);
        return view('admin.updateview',compact('data'));
    }

    public function updatecourse(Request $request,$id)
    {
        $data = course::find($id);

        $image = $request->file;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->file->move('productimage',$imagename);

            $data->image = $imagename;
        }

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back()->with('message','Course Updated Successfully!!!');
    }

    public function showorder()
    {
        $order = order::all();

        return view('admin.showorder',compact('order'));
    }

    public function updateStatus($id)
    {
        $order = order::find($id);

        $order->status='Confirmed';

        $order->save();

        return redirect()->back();
    }
}
