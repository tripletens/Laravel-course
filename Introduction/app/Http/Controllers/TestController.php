<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // this is for hello page 

    public function __construct()
    {
        // add a middleware 
        $this->middleware('isadmin')->only('hello_parent_page');
    }

    public function hello_page(){
        echo "hello page from controller ";
    }
    
    public function hello_student_page($age = false){
        if ($age){
            echo "Hello this student is $age years old";
        }else{
            echo "Hello this student hasnt submitted his details";
        }
    }

    public function hello_teacher_page(){
        echo "hello teacher page from controller ";
    }
    public function hello_parent_page(){
        echo "hello parent page from controller ";
    }

    public function fallback_page(){
        echo "OH! Something went wrong. Check back later";
    }
}
