<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    //  public function mailsend()
    // {
    //     $details = [
    //         'title' => 'Title: Mail from Real Programmer',
    //         'body' => 'Body: This is for testing email using smtp'
    //     ];

    //     \Mail::to('binmohamed030@gmail.com@gmail.com')->send(new SendMail($details));
    //     return back();
    // }

     public function index()
    { 
    $to_name = 'TO_NAME';
    $to_email = 'binmohamed030@gmail.com';
    $data = array('name'=>"Sam Jose", "body" => "Test mail");
        
    Mail::send('salumwaukweli@hotmail.com', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
                ->subject('Artisans Web Testing Mail');
        $message->from('FROM_EMAIL_ADDRESS','Artisans Web');
    });
}
    
}
