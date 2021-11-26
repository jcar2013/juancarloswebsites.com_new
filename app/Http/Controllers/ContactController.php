<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    // Create Contact Form
    public function contactForm(Request $request)
    {
        return view('contact');
    }

    // Store Contact Form
    public function storeContactForm(Request $request)
    {
        // Form Validation
        $this->validate($request, [
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Store Data in Database
        Contact::create($request->all());

        //  Send mail to admin
        \Mail::send('mail', [
            'name'       => $request->get('name'),
            'email'      => $request->get('email'),
            'phone'      => $request->get('phone'),
            'subject'    => $request->get('subject'),
            'user_query' => $request->get('message'),
        ], function ($message) use ($request) {
            $message->from($request->email);
            $message->to('zamoranocarlos13@gmail.com', 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
