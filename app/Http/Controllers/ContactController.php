<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $branches = Branch::orderBy('created_at', 'asc')->where('status', 1)->get();
        return view('pages.contact.index', compact('contact', 'branches'));
    }
}
