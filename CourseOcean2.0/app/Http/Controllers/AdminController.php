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
}
