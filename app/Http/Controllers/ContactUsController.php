<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

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

        // return view('mails.contactus', [
        //     "nameInput" => $input['name'],
        //     "email" => $input['email'],
        //     "messageInput" => $input['message'],
        // ]);

        Mail::send('mails.contactus', [
            "nameInput" => $input['name'],
            "email" => $input['email'],
            "messageInput" => $input['message'],
        ],
        function($m){
            $m->from($email);
            $m->to('kingshango99@gmail.com');
        }
    );
    }
}
