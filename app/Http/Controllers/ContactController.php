<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Throwable;
use App\Mail\ContactEnquiryMail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validate customer information
        $validated = $request->validate([
            'your-name' => 'required|string|max:255',
            'your-email' => 'required|email|max:255',
            'your-phone' => 'required|string|max:30',
            'your-message' => 'required|string|max:9000',
        ]);

        try {

            // Get the website owner's email address
            $recipient = config('mail.contact_address');

            if (empty($recipient)) {
                throw new \RuntimeException(
                    'Contact email address is not configured.'
                );
            }

            // Send the HTML email notification
            Mail::to($recipient)->send(
                new ContactEnquiryMail($validated)
            );

            return back()->with(
                'success',
                'Thank you for contacting us. Your message has been sent successfully.'
            );

        } catch (Throwable $e) {

            // Record the error for troubleshooting
            Log::error('Contact form email error', [
                'message' => $e->getMessage(),
                'exception' => $e,
            ]);

            return back()->with(
                'error',
                'Sorry, we could not send your message at this time. Please try again later.'
            );
        }
    }
}