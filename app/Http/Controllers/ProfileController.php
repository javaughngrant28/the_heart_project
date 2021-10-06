<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use App\Models\User;


class ProfileController extends Controller
{

    public function profileView()
    {
        $u_id = Auth()->User()->id;
        $aly = User::find($u_id)->findCourse;
//        return view('userProfile',['aly' =$aly ]);

        return view('userProfile',['aly' =>$aly ]);
    }

    public function updateProfileView()
    {
        return view('update_profile');
    }

    public function studentProfileView($id)
    {
        $u_id = $id;
        $aly = User::find($u_id)->findCourse;

        return view('userProfile',['aly' =>$aly ]);
    }

    public function updateProfileR(Request $req)
    {
        $val =$req->validate([

            'firstName' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

            'lastName' => ['required', 'string', 'min:3'],

            'address' => ['required', 'string', 'min:8'],

            'trn' => ['required', 'string', 'min:10', 'unique:users','regex:/^[-0-9\+]+$/'],

            'DOB' => ['required'],

            'credentials' => ['required','mimes:doc,docx,dot'],

            'pfp' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        if ($req->firstName != NULL) {
            User::where('id', '=', auth()->user()->id)->update([
                'f_name' => $req->firstName,
            ]);
        }

        if ($req->lastName != NULL) {
            User::where('id', '=', auth()->user()->id)->update([
                'l_name' => $req->lastName,
            ]);
        }
        if ($req->email != NULL) {
            User::where('id', '=', auth()->user()->id)->update([
                'email' => $req->email,
            ]);
        }

        if ($req->trn != NULL) {
            User::where('id', '=', auth()->user()->id)->update([
                'trn' => $req->trn,
            ]);
        }

        if ($req->address != NULL) {
            User::where('id', '=', auth()->user()->id)->update([
                'address' => $req->address,
            ]);
        }

        if ($req->DOB != NULL) {
            User::where('id', '=', auth()->user()->id)->update([
                'd_o_b' => $req->DOB,
            ]);
        }

        if ($req->credentials != NULL) {
            $c_path = $req->file('credentials')->store('public');
            User::where('id', '=', auth()->user()->id)->update([
                'user_qualification_path' => $c_path,
            ]);
        }

        if ($req->pfp != NULL) {
            $pfp_path = $req->file('pfp')->store('public');
            User::where('id', '=', auth()->user()->id)->update([
                'user_pfp_path' => $pfp_path,
            ]);
        }


        return redirect(route('profilePage'));
    }


}
