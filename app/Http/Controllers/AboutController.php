<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('pages.about.index', compact('about'));
    }

    public function privacy()
    {
        $privacy = About::first();
        return view('pages.about.privacy', compact('privacy'));
    }
}
