<?php

namespace App\Http\Controllers;


class EventController extends Controller
{
    public function index(){
        $title = "Event";
        $nav_menu = "";

        return view('cms.event', compact('title', 'nav_menu'));
    }
}
