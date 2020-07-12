<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index(){
        $title = "Search";
        $nav_menu = "";

        return view('cms.search', compact('title', 'nav_menu'));
    }
    public function searchPost(Request $request){
        if($request->search == "100"){
            session()->flash('msg','fail');
            return redirect('search');
        }
        elseif($request->search == "1000"){
            session()->flash('msg','success');
            return redirect('search');
        }
        else{
            session()->flash('msg','notfound');
            session()->flash('feedback','Kode pendaftaran tidak ditemukan');
            return redirect('search')
                        ->withInput(); 
        }
    }
}
