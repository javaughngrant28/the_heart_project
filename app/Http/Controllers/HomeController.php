<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::get();
        if(auth()->check() and auth()->user()->is_admin)
        {
            return view('adminDash',['course'=>$course]);
        }

        return view('mine',['course'=>$course]);
    }

     public function aboutUsView()
    {
        return view('aboutUs');
    }


}
