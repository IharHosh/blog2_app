<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function index(Request $request)
    {
//        dd(session()->all());
//        dd(session()->has('foo'));
//        $foo = session('foo');
//        $name = session('name');
//        dd($foo, $name);


//        $ip = $request->ip();
//        $path = $request->path();
//        $url = $request->url();
//        $full = $request->fullUrl();
//        dd($request->is('log*'));


        return view('login.index');
    }


    public function store(Request $request)
    {
//        $validated = $request->validate([
//            'email' => ['required', 'string', 'max:50', 'email', 'unique:users'],
//            'password' => ['required', 'string', 'min:7', 'max:50'],
//
//        ]);
//
//        dd($validated);
//        authenticate user
//        session(['alert' => __('Добро пожаловать!')]);
        alert(__('Добро пожаловать!'));

//        session([
//            'foo' => 'Bar',
//            'name' => 'Max',
//        ]);

//        dd($session);




//        $ip = $request->ip();
//        $path = $request->path();
//        $url = $request->url();
//            dd($ip, $path, $url);
//
//        $email = $request->input('email');
//        $password = $request->input('password');
//        $remember = $request->boolean('remember');
//
//        dd($email, $password, $remember);
//        session()->flush();



//        if (true){
//            return redirect()->back()->withInput();
//        }






        return redirect()->route('user');

    }
}
