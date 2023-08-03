<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // public function upload(Request $request){
    //     echo "<pre>";
    //     print_r($request->all());
    // }
    public function upload(Request $request){
        $fileName = time() . "-ws." . $request->file('image')->getClientOriginalExtension();
        // echo $fileName;
        // die;
        echo $request->file('image')->storeAs('uploads',$fileName);
    }
}
