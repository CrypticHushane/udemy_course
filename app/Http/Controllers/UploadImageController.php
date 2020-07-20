<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cloudder;

class UploadImageController extends Controller
{
    public function index(){
        return view('admin.website.uploadImage');
    }

    public function uploadImage(Request $request){
        $input= $request->all();
        $this->validate($request, [
            'uploadedImage' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 10000'
        ]);

        $imageName = $request->file('uploadedImage');
        $result = Cloudder::upload($imageName->getRealPath(), 'archaves');

        dd($result->getResult());
    }
}
