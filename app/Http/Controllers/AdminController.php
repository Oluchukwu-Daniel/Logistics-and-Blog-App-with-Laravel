<?php

namespace App\Http\Controllers;

use App\Models\Adminlogin;
use App\Models\Setquote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.adminlogin');
    }

    public function store(Request $request){

        $succ = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        
        if($succ){
            return $this->dashboard();
        }else{
            return back()->with('status', 'Invalid login details');
        }

    }

    public function login(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        Adminlogin::attempt(['email' => $request->email, 'password' => $request->password]);
    
        return redirect()->route('admindashboard');
    }

    public function dashboard(){

        $cont = DB ::table('contacts')->get();

        $contacts = $cont->toArray();
        

        return view('admin.dashboard', [
            'contacts' => $contacts
        ]);
    }

    public function calcview(){

         $last = Setquote::latest()->first();

        return view('admin.calculator', [

            'lasts' => $last
        ]);
    }


    public function calcedit(Request $request){
        $this->validate($request, [
            'weight' => 'required',
            'distance' => 'required',
            'ocean' => 'required',
            'road' => 'required',
            'air' => 'required'
    
        ]);
            

        $last = Setquote ::create([
            'weight_rate' => $request->weight,
            'distance_rate' => $request->distance,
            'ocean_rate' => $request->ocean,
            'road_rate' => $request->road,
            'air_rate' => $request->air
        ]);


        $last = Setquote::latest()->first();

        return view('admin.calculator', [

            'lasts' => $last
        ]);
    }
    
}
