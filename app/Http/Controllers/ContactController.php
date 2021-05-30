<?php


namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendContact(Request $request) {
        $request->validate(
            [
                'email' => 'required|email',
                'phone' => 'required|ax:12',
                "name" => 'required|max:100',
                'content' => 'required'
            ],
            [

            ]
        );
        Contact::create($request->all());
        return back()->with('success', 'Contact sent successfully');
    }
}
