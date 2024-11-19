<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function loginButton()
    {
        return view('loginForm');
    }

    public function loginFormButton(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $data = User::where('email', $email)->first();

        // dd($data);

        if($data)
        {
            if($password === $data->password)
            {
                Auth::login($data);

                if(Auth::user()->role == "admin")
                {
                    return redirect('/adminDash');
                }
                if(Auth::user()->role == "teacher")
                {
                    return redirect('/teacherDash');
                }
                if(Auth::user()->role == "student")
                {
                    return redirect('/studentDash');
                }
            }
            else{
                return redirect('log');
            }
        }
        return redirect()->back();
    }

}
