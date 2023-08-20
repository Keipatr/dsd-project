<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function blogPage()
    {
        return view('blog');
    }

    public function homepage()
    {
        return view('homepage');
    }
    public function SignIn(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required', // Use the custom validation rule here
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return view('homepage');
        } else {
            return redirect()->back()->with('error', 'Wrong Email/Password to login. Please try again.');
        }
        
    }

    public function ContactPage()
    {
        if (
            Auth::check() || Session::has('email')
        ) {
            return view('contact');
        } else {
            return redirect()->back()->with('error', 'You must login first to access contact page');
        }
    }
}
