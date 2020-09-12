<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\DataUmum;

class PanelController extends Controller
{
    public function registration() {
        $user = Auth::user();
        if ($user) {
            $title = "Admin";
            $nav_menu = "registration";

            $data_umum = DataUmum::get();

            return view('panel.registration', compact('user', 'title', 'nav_menu', 'data_umum'));
        } 

        return redirect('/login');
    }

    public function registration_detail(DataUmum $dataUmum) {
        $user = Auth::user();
        if ($user) {
            $title = "Admin";
            $nav_menu = "registration";

            return view('panel.registration_detail', compact('user', 'title', 'nav_menu', 'dataUmum'));
        } 
        
        return redirect('/login');
    }

}
