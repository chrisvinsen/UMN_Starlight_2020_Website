<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PesertaStellar;
use App\HasilStellar;
use Response;

class VotingStellarController extends Controller
{
    public function index()
    {
        $title = "Voting Stellar";
        $nav_menu = "Voting Stellar";
        $daftar_peserta = PesertaStellar::get();
        
        return view('cms.vote', compact('title', 'nav_menu', 'daftar_peserta'));
    }

    public function storeVoteData(Request $request)
    {
    	$validator = \Validator::make($request->all(), [
			'ip_address'         => 'required|unique:hasil_stellar|ip',
			'peserta_stellar_id' => 'required',
        ]);
        
        if ($validator->fails()) {
            $response['status'] = false;
        } else {
            HasilStellar::create([
				'ip_address'         => $request->ip_address,
				'peserta_stellar_id' => $request->peserta_stellar_id,
            ]);
            $response['status'] = true;
        	$response['id'] = $request->peserta_stellar_id;
        }

        return Response::json($response);
    }

    public function checkVotedData(Request $request)
    {
    	$response['status'] = false;
    	if ($request->ip_address) {

    		$voted = HasilStellar::where('ip_address', $request->ip_address)->first();

    		if ($voted) {
    			$response['status'] = true;
            	$response['id'] = $voted->peserta_stellar_id;
    		}
    	}
    	return Response::json($response);
    }
}
