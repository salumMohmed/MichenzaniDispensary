<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ContactMail;
use Mail;

class Email extends Model
{
    use HasFactory;
    public $table = 'contacts';
    public $fillable = ['name', 'email', 'phone', 'subject', 'message'];

      
    public static function boot() {

  

        parent::boot();

  

        static::created(function ($item) {

            $adminEmail = "binmohamed030@gmail.com";

            Mail::to($adminEmail)->send(new ContactMail($item));

        });

    }


}
