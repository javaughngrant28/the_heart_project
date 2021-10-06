<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Course;

use App\Models\Application;

class CourseController extends Controller
{
    public function createView()
    {
        return view('createCourse');
    }

    public function payView()
    {
        return view('payNow');
    }
    public function payViewR(Request $req)
    {
        $val =$req->validate([

            'card_name' => ['required', 'string', 'max:255'],

            'cardNumber' => ['required', 'string', 'min:10','regex:/^[-0-9\+]+$/'],

            'sic_numb' => ['required', 'numeric', 'min:10', 'regex:/^[-0-9\+]+$/'],
        ]);


        Application::where('user_id','=',auth()->user()->id)->update([
            'app_status' => 'enrolled',
            'payment_status' => 'Paid',
        ]);



        return redirect(route('profilePage',auth()->user()->id));
    }

    public function courseView($id)
    {

        $apply = Course::find($id)->findUsers;

        $course = Course::find($id);

        return view('course', ['course' => $course, 'apply' => $apply, 'c_id' => $id]);
    }

    public function updateCourseView($val)
    {
        if($val[1] == 'y')
        {
            Application::where('app_id','=',$val)->update([
                'app_status' => 'Approved',
                ]);

        }elseif ($val[1] == 'n')
        {
            Application::where('app_id','=',$val)->update([
                'app_status' => 'Rejected',
            ]);
        }


        return back();
    }

    public function courseEditView($id)
    {

        $course = Course::find($id);

        return view('adminEdit', ['course' => $course]);
    }

    public function courseEditViewR(Request $req, $id)
    {


        if ($req->c_name != NULL) {
            Course::where('id', '=', $id)->update([
                'c_name' => $req->c_name,
            ]);
        }

        if ($req->money != NULL) {
            Course::where('id', '=', $id)->update([
                'c_price' => $req->money,
            ]);
        }

        if ($req->c_end != NULL) {
            Course::where('id', '=', $id)->update([
                'end_date' => $req->c_end,
            ]);
        }

        if ($req->c_start != NULL) {
            Course::where('id', '=', $id)->update([
                'start_date' => $req->c_start,
            ]);
        }

        if ($req->c_awards != NULL) {
            Course::where('id', '=', $id)->update([
                'award' => $req->c_awards,
            ]);
        }

        if ($req->c_format != NULL) {
            Course::where('id', '=', $id)->update([
                'format' => $req->c_format,
            ]);
        }

        if ($req->c_description != NULL) {
            Course::where('id', '=', $id)->update([
                'description' => $req->c_description,
            ]);
        }

        if ($req->c_location != NULL) {
            Course::where('id', '=', $id)->update([
                'location' => $req->c_location,
            ]);
        }


        if ($req->course_img != NULL) {
            $c_photo_path = $req->file('course_img')->store('public');
            Course::where('id', '=', $id)->update([
                'c_photo' => $c_photo_path,
            ]);
        }



        if ($req->featured != NULL) {
            Course::where('id', '=', $id)->update([
                'is_featured' => True,
            ]);
        }else
        {
            Course::where('id', '=', $id)->update([
                'is_featured' => false,
            ]);
        }


        return redirect(route('coursePage',$id));
    }


    public function allCourseView()
    {

        $course = Course::get();
        return view('courseList', ['course' => $course]);
    }


    public function courseViewR(Request $req)
    {
        if ($req->input('back')) {
            return redirect(route('home'));
        } else {
            Application::create([
                'user_id' => auth()->user()->id,
                'course_id' => $req->c_id,
            ]);

            return redirect(route('coursePage', $req->c_id));
        }

    }


    public function createViewR(Request $req)
    {
        $img_path = $req->file('course_img')->store('public');
        if ($req->featured != NULL) {
            $featured = TRUE;
        } else {
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
