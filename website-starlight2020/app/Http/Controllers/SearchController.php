<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    public function index(){
        $title = "Search";
        $nav_menu = "";

        return view('cms.search', compact('title', 'nav_menu'));
    }

    public function searchPost(Request $request){
        $result = DB::table('data_umum')->select('token', 'stage', 'status')->where('token', $request->search)->first();

        if ($result) {
            if ($result->status == "Pending") {
                session()->flash('msg', 'pending');
                return redirect('search');
            }
            elseif ($result->status == "Accepted") {
                session()->flash('msg', 'success');
                return redirect('search');
            }
            elseif ($result->status == "Declined") {
                session()->flash('msg', 'fail');
                return redirect('search');
            }
        }
        else {
            session()->flash('msg', 'notfound');
            session()->flash('feedback', 'Kode pendaftaran tidak ditemukan');
            return redirect('search')
                        ->withInput();
        }
    }
}
