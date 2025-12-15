<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use App\Models\Branch;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $branches = Branch::orderBy('order', 'desc')->where('status', 1)->get();
        return view('pages.contact.index', compact('contact', 'branches'));
    }

    public function contact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:35',
            'phone_number' => 'nullable|string|max:30',
            'email' => 'required|email|max:255',
            'title' => 'nullable|string|max:255',
            'message' => 'required|string|min:3',
        ]);
        Appeal::create($data);
        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
