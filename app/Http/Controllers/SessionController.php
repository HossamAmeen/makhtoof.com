<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Home;

class sessionController extends Controller
{
    public function login()
    {
        $home=Home::all();
        return view('signin',compact('home'));
    }
    public function check(Request $request)
    {
        if(! auth()->attempt(request(['email','password'])))
        {
            return back()->withErrors([
                "message"=>"خطأ فى اسم المسخدم او كلمة المرور"
            ]);
        }
        return redirect('/profile');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/home');
    }
}
