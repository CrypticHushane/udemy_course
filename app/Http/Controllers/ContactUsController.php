<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(Request $request){
        $input = $request->all();
        $validator = $request->validate([
            'message' => ['required', 'max:255'],
            'name' => ['required'],
            'email'=> ['required'],
        ]);
        // dump($input);

        return view('mails.contactus', [
            "name" => $input['name'],
            "email" => $input['email'],
            "message" => $input['message'],
        ]);

        Mail::send();
    }
}
