<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('pages.index', compact('about'));
    }
}
