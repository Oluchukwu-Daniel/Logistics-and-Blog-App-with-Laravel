<?php

namespace App\Http\Controllers;

use App\Models\Orderdetails;
use App\Models\Quote;
use App\Models\Setquote;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuoteController extends Controller 
{
    
    public function store(Request $request) {

        $this->validate($request, [
            'weight' => 'required',
            'pick_up' => 'required',
            'drop_off' => 'required',
            'distance' => 'required',
            'freight_type' => 'required|in:air,ocean,road'
            
        ]);

        $last = Setquote::latest()->first();


        if ($request->freight_type == 'air'){
             $freight = $last['air_rate'];
        }else if ($request->freight_type == 'ocean'){
            $freight = $last['ocean_rate'];
        }else if ($request->freight_type == 'road'){
            $freight = $last['road_rate'];
        }

        $weight = $request->weight * $last['weight_rate'];
        $distance = $request->distance * $last['distance_rate'];
        $estimate = $weight + $distance + $freight;

        $details = $request->user()->quotes()->create([
            'weight' => $weight,
            'pick_up' => $request->pick_up,
            'drop_off' => $request->drop_off,
            'distance' => $distance,
            'freight_type' => $request->freight_type,
            'estimate' => $estimate
        ]);



        return view('quotes', [
            'details' => $details
        ]);
        
        
    }

    public function index(Request $request, Quote $param){

        $tracking_id = uniqid();
        
        
        $param->track()->create([
            'unique_id' => $tracking_id,
            'user_id' => $request->user()->id,
        ]);

        return view('placedorder', [
            'tracking_id' => $tracking_id,
            'param' => $param
        ]);
    }

    public function view(){

        $quotes = Quote::get();

        $quotes = $quotes->toArray();

        return view('admin.orders', [
            'quotes' => $quotes
        ]);
    }

    public function update(Request $request, Quote $quote){

        //$quote here standing as id, when dd can reveal other properties of the row since its binded with the mdel
        if ($request->update == "In-transit"){
    
           Quote::where('id', $quote['id'])
            ->update(['status' => "In-Transit"]);

        }else if($request->update == "Delivered"){

           Quote::where('id', $quote['id'])
            ->update(['status' => "Delivered"]);

        }else if($request->update == "In-transit"){

           Quote::where('id', $quote['id'])
            ->update(['status' => "Completed"]);
        }

        $quotes = Quote::get();
        $quotes = $quotes->toArray();

        return view('admin.orders', [
            'quotes' => $quotes
        ]);
        
    }

    
    
}