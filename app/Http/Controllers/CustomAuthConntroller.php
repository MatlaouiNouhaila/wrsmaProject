<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthConntroller extends Controller
{
    public function coustomlogin(){
        return view("auth.login");
    }
    public function coustomregister(){
        return view("auth.register");
    }
    public function registeruser(Request $request){
        echo 'post valide';
    }
}
