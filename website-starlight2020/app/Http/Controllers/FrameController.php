<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class FrameController extends Controller
{
    //
    public function index(){
        $title = "Twibbon";
        $nav_menu = "";

        return view('cms.frame', compact('title', 'nav_menu'));
    }

    public function framePost(Request $request) {
        $title = "Twibbon";
        $nav_menu = "";

        $filename = 'default-user';
        if ($request->hasFile('uploadphoto')) {
            $path = public_path('images/user');
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }

            $image = $request->file('uploadphoto');
            $filename = $image->getClientOriginalName();
            $request->file('uploadphoto')->move($path, $filename);
        }
        $photo = 'images/user/' . $filename;

        return view('cms.frameUpload', compact('title', 'nav_menu', 'photo'));
    }
}
