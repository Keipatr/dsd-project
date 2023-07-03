<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contactUsController extends Controller
{
    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=> 'required',
            'subject'=> 'required',
            'message'=> 'required'
        ]);

        $name =$request->input('name');
        $email =$request->input('email');
        $subject =$request->input('subject');
        $message =$request->input('message');

        $dataInput=[$name,$email,$subject,$message];
        
        DB::insert("INSERT INTO contact_us (NAME,EMAIL,SUBJECT,MESSAGE) VALUES(?,?,?,?)", $dataInput);
        
        return view('contact');

    }
}
