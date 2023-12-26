<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
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
