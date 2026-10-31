<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\EnquiryMail;
use App\Mail\EnquiryReplyMail;
use App\Mail\ContactMail;
use App\Mail\ContactMailReply;
use App\Models\Enquiry;
use App\Models\Property;
use App\Models\Contact;

class EnquiryController extends Controller
{
    public function enquiryForm(Request $request){
        return view('frontend.property-details');
    }

    public function sendEnquiry(Request $request){
        
        // Honeypot check
        if ($request->filled('website')) {
            return back()->withErrors(['error' => 'Spam detected!'])->withInput();
        }

        // Validate inputs
        $validated = $request->validate([
            'property_id' => 'required|exists:properties,property_id',
            'name'        => 'required|string|max:255',
            'phone'       => 'required|string|max:20',
            'email'       => 'required|email',
            'message'     => 'required|string|max:1000',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        // Add IP address
        $validated['ip'] = $request->ip();
        
        // Fetch property title
        $property = Property::find($validated['property_id']);
        $validated['title'] = $property ? $property->title : 'N/A';

        // Save enquiry to database
        $enquiry = Enquiry::create($validated);

        // Prepare mail sending in try-catch to avoid breaking the flow
        try {
            // Send reply to user
            Mail::to($validated['email'])->send(new EnquiryReplyMail($validated));
        } catch (\Exception $e) {
            Log::error('User reply mail failed: ' . $e->getMessage());
        }

        try {
            // Send notification to admin
            Mail::to('noreply@appsynctechnologies.co.uk')->send(new EnquiryMail($validated));
        } catch (\Exception $e) {
            Log::error('Admin notification mail failed: ' . $e->getMessage());
        }

        // Return back with success message and old input
        return back()->with('success', 'Thank you, your message has been sent!')->withInput();
    }
    public function contactEnquiry(Request $request){

        if ($request->filled('website')) {
            return back()->withErrors(['error' => 'Spam detected!'])->withInput();
        }
    
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
            'g-recaptcha-response' => 'required|captcha',
        ]);
    
        $validated['ip'] = $request->ip();
        
        Contact::create($validated);
    
        try {
            Mail::to($validated['email'])->send(new ContactMailReply($validated));
        } catch (\Exception $e) {
            Log::error('User reply mail failed: ' . $e->getMessage());
        }
    
        try {
            Mail::to('noreply@appsynctechnologies.co.uk')->send(new ContactMail($validated));
        } catch (\Exception $e) {
            Log::error('Admin notification mail failed: ' . $e->getMessage());
        }
    
        return back()->with('success', 'Thank you, your message has been sent!')->withInput();
    }
    
    
    
  
}