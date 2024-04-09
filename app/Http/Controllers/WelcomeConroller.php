<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeConroller extends Controller
{
    //welcome controller
    public function welcome(){
        return view('welcome');
    }
}
