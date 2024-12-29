<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authmanager extends Controller
{
    function login()
    {
        return view(view:'auth.login');

    }

    public function loginPost(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    // Retrieve the user by email
    $user = \App\Models\User::where('email', $request->email)->first();

    if ($user && \Illuminate\Support\Facades\Hash::check($request->password, $user->password)) {
        // Manually log in the user
        Auth::login($user);
        return redirect()->intended(route('home'));
    }

    return redirect('login')
        ->with('error', 'Invalid Email or Password');
}


    function logout()
    {
        Auth::logout();
        return redirect(to:"login");
    }

    function register()
    {
        return view(view:'auth.register');

    }

    function registerPost(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'password' =>'required',

        ]);
        $user =new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if($user->save()){
            return redirect()->intended(route(name:"login"))
            ->with("success", "You have been registered successfully");
        }
        return redirect(route(name:"register"))->with("error", "something went wrong");

    }
}
