<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Course;

Use App\Models\Application;

class CourseController extends Controller
{
    public function createView()
    {
        return view('createCourse');
    }

    public function courseView($id)
    {

        $aly = Course::find($id)->findUsers;

        $course =Course::find($id);
        return view('course',['course'=>$course,'aly'=>$aly]);
    }



    public function allCourseView()
    {

        $course = Course::get();
        return view('courseList',['course'=>$course]);
    }




    public function courseViewR(Request $req)
    {
        if($req->input('back'))
        {
            return redirect(route('home'));
        }else
        {
            Application::create([
                'user_id' => auth()->user()->id,
                'course_id' => $req->c_id,
            ]);

            return redirect(route('coursePage',$req->c_id));
        }

    }




    public function createViewR(Request $req)
    {
        $img_path = $req->file('course_img')->store('public');
        if($req->featured != NULL)
        {
            $featured = TRUE;
        }else
        {
            $featured = FALSE;
        }

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
            'is_featured' => $featured,
        ]);
        return redirect(route('home'));
    }




}
