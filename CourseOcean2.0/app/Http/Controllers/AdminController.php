<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

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
}
