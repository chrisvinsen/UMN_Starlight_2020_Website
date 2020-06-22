<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        $title = "Register";
        $nav_menu = "";
        
        return view('cms.register', compact('title', 'nav_menu'));
    }
}
