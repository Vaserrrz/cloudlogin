<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Psy\Readline\Userland;

class LoginController extends Controller
{
    public function index(){
        return view('screens.login');
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
