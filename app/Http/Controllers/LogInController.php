<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogInController extends Controller
{
    public function loadLogInView()
    {
        return view('logInPage');
    }

    public function loadSignUpView()
    {
        return view('signUp');
    }
}
