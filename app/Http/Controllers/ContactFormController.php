<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'subject' => 'required|subject',
            'message' => 'required|min:10',
        ]);

        // Process the data (e.g., sending email)

        return back()->with('success', 'Thank you for your message!');
    }
}