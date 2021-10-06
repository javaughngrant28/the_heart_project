<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Application;

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
            $pending_users = Application::get('app_status');
            $all_users = User::get();
            return view('adminDash',['course'=>$course,'pending_users'=>$pending_users,'all_users'=>$all_users]);

        }

        return view('mine',['course'=>$course]);
    }

     public function aboutUsView()
    {
        return view('aboutUs');
    }


}
