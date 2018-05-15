<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function getForm()
    {
        return view('contact');
    }

    public function postForm(ContactRequest $request)
    {
        Mail::send('email_contact', $request->all(), function($message) 
        {
            $message->to('webDev.fk@gmail.com')->subject('Contact');
        });

        return view('confirm');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'telephone' => 'required|min:11|max:0989999999|numeric'
        ]);

        Mail::send('email_tel_contact',  $request->only('telephone'), function($message) 
        {
            $message->to('webDev.fk@gmail.com')->subject('Contact téléphonique');
        });

        return view('confirm_tel');
    }
}
