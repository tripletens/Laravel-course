<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //


    public function homepage(){
        $students = [
            [
                "name" => "Nonso",
                "age" => 20
            ],
            [
                "name" => "Nonso",
                "age" => 40
            ],
            [
                "name" => "Tony",
                "age" => 35
            ]
        ];
    
        $data = [
            'students'=>$students
        ];
    
        return view('pages.home')->with($data);
    }

    public function submit_form(Request $request){
        // dd($request); die();

        // dd($request->all());
        echo $request->passport->getClientOriginalName();
        // or 
        // echo $request->input('name');
        // return redirect('/');
    }
}
