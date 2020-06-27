<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        $title = "Registration";
        $nav_menu = "";
        
        return view('cms.registration', compact('title', 'nav_menu'));
    }
}
