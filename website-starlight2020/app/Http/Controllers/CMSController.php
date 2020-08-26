<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function email()
    {
        return view('cms.template.email');
    }

    public function committee()
    {
        $title = "Committee";
        $nav_menu = "committee";

        try{
            Mail::send('cms.template.email', ['nama' => "SEN", 'pesan' => "ISI PESAN"], function ($message)
            {
                $message->subject("Thank you for Being a Vergilia!");
                $message->from('printugasen@gmail.com', 'Starlight 2020');
                $message->attach("https://starlight.umn.ac.id/files/Committee Recruitment/CENTAURI.pdf");
                $message->to("christianto.vinsen@student.umn.ac.id");
            });
        }
        catch (Exception $e){
            print_r($e);
            die();
        }

        return view('cms.committee', compact('title', 'nav_menu'));
    }

    public function contact()
    {
        $title = "Contact";
        $nav_menu = "contact";

    	return view('cms.contact', compact('title', 'nav_menu'));
    }
}
