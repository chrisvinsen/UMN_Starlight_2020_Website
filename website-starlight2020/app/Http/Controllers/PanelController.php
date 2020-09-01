<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PanelController extends Controller
{
    public function index()
    {
        $title = "Login";
        $nav_menu = "";

        if (Session::get('remember_me'))
            return redirect('admin');
        else
            return view('cms.login', compact('title', 'nav_menu'));
    }

    public function admin()
    {
        $title = "Admin";
        $nav_menu = "";

        $data_umum = DB::table('data_umum')->get();
        for ($i = 0; $i < count($data_umum); $i++) {
            $date = $data_umum[$i]->created_at;
            $tempDate = date_create("$date");
            $newDate = date_format($tempDate, 'd F Y');
            $data_umum[$i]->created_at = $newDate;
            $data_umum[$i]->line = '@' . $data_umum[$i]->line;

            $data_individu = DB::table('data_individu')->select('fullname', 'birthdate', 'address', 'school', 'phonenumber', 'line', 'ktp', 'studentid', 'stagename')->where('stagename', $data_umum[$i]->stagename)->get();
            for ($j = 0; $j < count($data_individu); $j++) {
                $date = $data_individu[$j]->birthdate;
                $tempDate = date_create("$date");
                $newDate = date_format($tempDate, 'd F Y');
                $data_individu[$j]->birthdate = $newDate;
                $data_individu[$j]->line = '@' . $data_individu[$j]->line;
            }
            $data_umum[$i]->data_individu = array();
            for ($j = 0; $j < count($data_individu); $j++)
                array_push($data_umum[$i]->data_individu, $data_individu[$j]);
        }

        return view('cms.admin', compact('title', 'nav_menu', 'data_umum', 'data_individu'));
    }

    public function loginPost(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $admin = DB::table('admin')->where('username', $username)->first();
        if ($admin && $password == $admin->password) {
            if (!strcmp($request->remember_me, 'on'))
                Session::put('remember_me', TRUE);
            return redirect('admin');
        }

        session()->flash('status', 'fail');
        return redirect('login');
    }
}
