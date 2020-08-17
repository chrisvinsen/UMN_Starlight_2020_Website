<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class TwibbonController extends Controller
{
    public function index(){
        $title = "Twibbon";
        $nav_menu = "";

        return view('cms.twibbon', compact('title', 'nav_menu'));
    }

    public function twibbonPost(Request $request) {
        $title = "Twibbon";
        $nav_menu = "";

        $filename = 'default-user';
        if ($request->hasFile('uploadphoto')) {
            $path = public_path('images/twibbon');
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }

            $image = $request->file('uploadphoto');
            $filename = $image->getClientOriginalName();
            $request->file('uploadphoto')->move($path, $filename);
        }
        $photo = 'images/twibbon/' . $filename;

        return view('cms.twibbon_result', compact('title', 'nav_menu', 'photo'));
    }
}
