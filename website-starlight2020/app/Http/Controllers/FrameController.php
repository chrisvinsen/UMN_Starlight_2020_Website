<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrameController extends Controller
{
    //
    public function index(){
        $title = "Bingkai";
        $nav_menu = "";

        return view('cms.frame', compact('title', 'nav_menu'));
    }

    public function framePost(){
        $title = "Bingkai";
        $nav_menu = "";

        return view('cms.frameUpload', compact('title', 'nav_menu'));
    }
}
