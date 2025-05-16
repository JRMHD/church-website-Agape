<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($data);

        Mail::to('agapetempleglobalministryafric@gmail.com')->send(new ContactFormMail($data));

        return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
    }
}
