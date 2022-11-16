<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Email;

class SendEmailController extends Controller
{
   public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        Email::create($request->all());
         return back();
        // return redirect('/')->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }    
}
