<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(){
        $data=request()->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'company' => 'required',
            'message' => 'required'
        ]);

        Mail::to('fernan.cabrera.email@gmail.com')->send(new ContactUsMail($data));

        return redirect('Greetings');
    }
}
