<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function handleLogin(LoginRequest $request)
    {
        // $request->validate([
        //     // 'name' => 'required',
        //     // 'email'=> ['required','email'],
        //     // 'password' => ['required','min:8'],
        // ],[
        //     //-------- CARA MENGGANTI PESAN VALIDATION TEXT POP UP ------//
        //     //-- Panggil rulenya terlebih dahulu lalu beri pesan custom pada pesan validationnya --//
        //     'name.required' => 'The User name must be filled cok!',
        //     'email.required' => 'The Email must be filled cok!',
        //     'password.required' => 'The Password must be filled cok!',
        //     'password.min' => 'The Password minim 8 character cok!',
        // ]);
        return $request;
    }
    
}