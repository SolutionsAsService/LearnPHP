<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function store(ContactRequest $request)
    {
        ContactMessage::create($request->validated());

        return redirect()->route('contact')
            ->with('status', 'Thank you, '.$request->input('name').'. We will respond to your message shortly.');
    }
}
