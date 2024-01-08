<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function home(){
        return view ('testHome');
    }

    public function contact(){
        return view ('contact');
    }
    public function guard(){
        return view ('guard');
    } 
    
    public function service(){
        return view ('service');
    }

    public function about(){
        return view ('about');
    }
}
