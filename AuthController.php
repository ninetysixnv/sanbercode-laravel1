<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        $firstName = $request["firstName"];
        $lastName = $request["lastName"];
        return view('signUp.blade.php')
            ->with('firstName', $firstName)
            ->with('lastName', $lastName);
    }
}