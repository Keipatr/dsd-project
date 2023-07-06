<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Mail\CongratsMail;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validation succeeded, create the user and insert into the database
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        if (!$user) {
            return redirect()->back()->with('error', 'Failed to create the account. Please try again.');
        }

        // Registration successful
        Mail::to($user->email)->send(new CongratsMail($user));
        return redirect()->back()->with('success', 'Account created successfully!');
    }
}
