<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function login(){
        return view(view:'login');
    }
    public function auth(Request $request){
        $validasi = $request->validate(rules:[
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($validasi)){
            return redirect('home')->with('pesan', 'login anda berhasil');
        }
        return redirect()->back()->with('pesan','Login anda gagal');

    }
    public function log(){
        return view('log');
    }

    public function loginuser(){
        return view('loginuser');
    }

    public function index(){


        return view('lp');
    }

    public function register(){
        return view('register');
    }


    public function hm(){
        return view('home');
    }

    public function showLoginOptions()
    {
        return view('login-option');
    }

    // public function showBuyerLoginForm()
    // {
    //     return view('auth.login-buyer');
    // }

    // public function showSellerLoginForm()
    // {
    //     return view('auth.login-seller');
    // }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }

}
