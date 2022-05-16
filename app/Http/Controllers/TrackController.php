<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Tracking_id;
use App\Models\User;
use Illuminate\Http\Request;
use mysqli;

class TrackController extends Controller
{
    public function store(Request $request, Tracking_id $track){
       $trackid = $request->track;


       $searchTracks = Tracking_id::where('unique_id', 'LIKE', '%'.$trackid.'%')->get();

       foreach($searchTracks as $searchTrack){
        $status = $searchTrack["status"];
      }
        

       return view('trackstatus', ['status'=> $status]);
        
    }
}

