<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Page;

class ContactUsController extends Controller
{
    public function index(Request $request){
         $input = $request->all();
        $validator = $request->validate([
            'message' => ['required', 'max:255'],
            'name' => ['required'],
            'email'=> ['required'],
        ]);

        Mail::send('mails.contactus', [
            "nameInput" => $input['name'],
            "email" => $input['email'],
            "messageInput" => $input['message'],
        ],
        function($m){
            $m->from('kingshango999@gmail.com');
            $m->to('stoppage.tme@gmail.com');
        }
        );

        return ([
            'success' => true,
            'message' => 'Thank you for your Response.We wil get back to you soon'
        ]);
    }

    public function pages(){
        $pages = Pages::all();
        dd($pages);

    }
}
    

    