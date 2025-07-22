<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show(Request $request)
    {
        return view('pages.contact-show');
    }

    public function send(Request $request)
    {
        // echo "contacts form is work";
        $validator = $request->validate(
            [
            'first_name' => "required|string|max:255",
            'email' => 'required|email|max:255',
            "message" => "required|string|max:1000",
            ]
        );

        Contact::create($validator);

        return redirect()->route('home')->with('success', 'You message sended successfully!');
    }
}
