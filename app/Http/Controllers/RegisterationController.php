<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Home;


use App\Role;
use Illuminate\Support\Facades\Mail;

class registerationController extends Controller
{
    public function register()
    {
        $home=Home::all();
        return view('signup',compact('home'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'email'=>'required|email|unique:users',
        ]);
        $user=new User;
        $user->firstName=$request->firstname;
        $user->lastName=$request->lastname;
        // $user->userName=$request->username;
        $user->password=bcrypt($request->password);
        $user->email=$request->email;
        $user->governate=$request->governate;
        $user->city=$request->city;
        $user->phone=$request->phone;
        $user->gender=$request->gender;
        $user->save();

        //add role
        $user->roles()->attach(Role::where('name','user')->first());
      //  \Mail::to($user)->send(new registermail);

        //login
        auth()->login($user);

        return redirect('/profile');
    }
}
