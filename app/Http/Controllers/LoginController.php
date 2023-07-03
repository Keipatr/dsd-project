<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    
    public function SignIn(Request $request){
       Session::flash('email',$request->email);
       $request->validate([
        'email'=>'required',
        'password'=>'required'
       ],[
        'email.required'=>'Email wajib diisi',
        'password.required'=>'Password wajib diisi'
       ]);

       $infologin=[
            'email'=>$request->email,
            'password'=>$request->password
       ];

       if(Auth::attempt($infologin)){
        return 'sukses';
       }
       else{
        return 'gagal';
       }
    }
}
