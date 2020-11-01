<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataUmum;
use Response;
use DB;
use Mail;

class CMSController extends Controller
{
    public function home()
    {
        $title = "Home";
        $nav_menu = 'home';

        return view('cms.home', compact('title', 'nav_menu'));
    }

    public function aboutus()
    {
        $title = "About";
        $nav_menu = "aboutus";

        return view('cms.aboutus', compact('title', 'nav_menu'));
    }

    public function committee()
    {
        $title = "Committee";
        $nav_menu = "committee";

        return view('cms.committee', compact('title', 'nav_menu'));
    }

    public function contact()
    {
        $title = "Contact";
        $nav_menu = "contact";

        return view('cms.contact', compact('title', 'nav_menu'));
    }

    public function event(){
        $title = "Event";
        $nav_menu = "event";
        
        return view('cms.event', compact('title', 'nav_menu'));
        
    }

    public function vote(){
        $title = "Voting Stellar";
        $nav_menu = "Voting Stellar";
        $stagename_list = DataUmum::get();
        
        return view('cms.vote', compact('title', 'nav_menu', 'stagename_list'));
        
    }
}
