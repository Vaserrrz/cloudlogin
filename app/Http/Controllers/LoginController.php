<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('screens.login');
    }
    public function log(){
        $credentials = request()->only('email','password');
        if  (Auth::attempt($credentials)) {
            return redirect('dashboard');
       }
       return redirect('login');
    }

    public function register(){
        return view('screens.register');
    }

    public function store(Request $request){

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
    }

    public function show(){
        return view('screens.dashboard');
    }
}
