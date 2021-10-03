<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    public function createView()
    {
        return view('createCourse');
    }

     public function createViewR(Request $req)
    {
        $img_path = $req->file('course_img')->store('public');
        Course::create([
            'c_name' => $req->c_name,
            'c_price' => $req->money,
            'end_date' => $req->c_end,
            'start_date' => $req->c_start,
            'award' => $req->c_awards,
            'format' => $req->c_format,
            'description' => $req->c_description,
            'location' => $req->c_location,
            'c_photo' => $img_path,
        ]);
        return "doone";
    }




}
