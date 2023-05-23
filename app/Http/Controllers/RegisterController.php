<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }


    public function store(Request $request)
    {
//        $name = $request->input('name');
//        $email = $request->input('email');
//        $password = $request->input('password');
//        $password2 = $request->input('password-confirmation');
//        $remember = $request->input('remember');
//
//  dd($name, $email, $password, $password2, $remember);

        if (true){
            return redirect()->back()->withInput();
        }

    return redirect()->route('user');
//        return 'Запрос на регистрацию';
    }
}
