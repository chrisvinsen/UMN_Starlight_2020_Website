<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationResultCheckController extends Controller
{
    //
    public function index(){
        $title = "Registration Result Check";
        $nav_menu = "";

        return view('cms.registration_result_check', compact('title', 'nav_menu'));
    }

    public function searchPost(Request $request){
        $result = DB::table('data_umum')->select('stagename', 'token', 'stage', 'status')->where('token', $request->search)->first();

        if ($result) {
            if ($result->status == "Pending") {
                session()->flash('msg', 'pending');
                return redirect('registration/result');
            }
            elseif ($result->status == "Accepted") {
                session()->flash('msg', 'success');
                session()->flash('name', $result->stagename);
                session()->flash('link', "https://line.me/R/ti/g/y-ADlqqycC");
                return redirect('registration/result');
            }
            elseif ($result->status == "Declined") {
                session()->flash('msg', 'fail');
                return redirect('registration/result');
            }
        }
        else {
            session()->flash('msg', 'notfound');
            session()->flash('feedback', 'Kode pendaftaran tidak ditemukan');
            return redirect('registration/result')
                        ->withInput();
        }
    }
}
