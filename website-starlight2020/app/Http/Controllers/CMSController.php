<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use DB;

class CMSController extends Controller
{
    public function home()
    {
        $title = "Home";
        $nav_menu = 'home';

        // $banner_lists = CMSHomeBanners::get();
        // $category_lists = CMSCategories::get();
        // $case_lists = CMSHomeCases::get();
        // $contact_lists = CMSHomeContacts::get();
        // $customer_lists = CMSHomeCustomers::get();
        // $goal_lists = CMSHomeGoals::first();

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

}
