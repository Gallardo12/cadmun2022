<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use Alert;

class ContactUsFormController extends Controller {

    // Create Contact Form
    // public function createForm(Request $request) {
    //   return view('contact');
    // }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all());

        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('technology@cadmun.org', 'Admin')->subject($request->get('subject'));
        });
        Alert::success('Thanks', 'We have received your message and would like to thank you for writing to us.');

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

}