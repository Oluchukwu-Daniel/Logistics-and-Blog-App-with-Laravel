<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(){

        return view('contact');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'subject' => 'required',
            'comment' => 'required'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'subject' => $request->subject,
            'comment' => $request->comment,
        ]);

        $response = 'Dear '. $request->name .', Thank you for reaching out';
        return view('contact', [
            'response' => $response,
        ]);
        
    }

    // public function view(Request $request){

        
        
                
    // }
}
