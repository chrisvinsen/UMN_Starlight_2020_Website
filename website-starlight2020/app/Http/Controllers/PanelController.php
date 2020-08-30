<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PanelController extends Controller
{
    public function index(){
        $title = "Login";
        $nav_menu = "";

        if (Session::get('remember_me'))
            return redirect('admin');
        else
            return view('cms.login', compact('title', 'nav_menu'));
    }

    public function admin() {
        $title = "Admin";
        $nav_menu = "";

        $data_umum = DB::table('data_umum')->where('stagename', Session::get('stagename'))->first();
        $tempDate = date_create("$data_umum->created_at");
        $newDate = date_format($tempDate, 'd F Y');
        $data_umum->created_at = $newDate;
        $data_umum->line = '@' . $data_umum->line;
        $data_individu = array();
        for ($i = 0; $i < $data_umum->membersvalue; $i++)
            array_push($data_individu, DB::table('data_individu')->where('stagename', Session::get('stagename'))->first());
        for ($i = 0; $i < $data_umum->membersvalue; $i++) {
            $date = $data_individu[$i]->birthdate;
            $tempDate = date_create("$date");
            $newDate = date_format($tempDate, 'd F Y');
            $data_individu[$i]->birthdate = $newDate;
            $data_individu[$i]->line = '@' . $data_individu[$i]->line;
        }

        return view('cms.admin', compact('title', 'nav_menu', 'data_umum', 'data_individu'));
    }

    public function loginPost(Request $request) {
        $username = $request->username;
        $password = $request->password;

        $admin = DB::table('admin')->where('username', $username)->first();
        if ($admin && Hash::check($password, $admin->password)) {
            if (!strcmp($request->remember_me, 'on'))
                Session::put('remember_me', TRUE);
            Session::put('stagename', $admin->stagename);

            return redirect('admin');
        }

        session()->flash('status', 'fail');
        return redirect('login');
    }
}
