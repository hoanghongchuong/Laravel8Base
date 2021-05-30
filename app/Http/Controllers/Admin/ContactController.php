<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        $data = Contact::orderBy('id', 'desc')->paginate(20);
        return view('admin.contact.index', compact('data'));
    }
}
