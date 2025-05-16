<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Mail\DonationInquiryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'country' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        $donation = Donation::create($data);

        Mail::to('agapetempleglobalministryafric@gmail.com')->send(new DonationInquiryMail($donation));

        return response()->json(['success' => true, 'message' => 'Donation inquiry sent successfully!']);
    }
}
