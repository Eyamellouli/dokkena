<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        // La validation sera ajoutée en partie 3 (Form Request).
        return view('contact.thanks', compact('name', 'email', 'subject', 'message'));
    }
}
