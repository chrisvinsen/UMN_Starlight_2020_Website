<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class PanelController extends Controller
{
    public function index(){
        $title = "Login";
        $nav_menu = "";

    	return view('cms.login', compact('title', 'nav_menu'));
    }

    public function admin() {
        $title = "Admin";
        $nav_menu = "";


        return view('cms.admin', compact('title', 'nav_menu'));
    }
}
