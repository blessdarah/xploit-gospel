<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contact;

class UtilsController extends Controller
{
    public function contact(Contact $contact) {
        $msg = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $contact::create($msg);
        return back()->with('success', 'Thank you for reaching out. We will respond shortly');
    }
}
