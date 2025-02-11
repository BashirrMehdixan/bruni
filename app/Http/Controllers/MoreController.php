<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoreController extends Controller
{
    public function index()
    {
        return view('pages.more.index');
    }

    public function show($slug)
    {
        return view('pages.more.show');
    }

    public function press($slug)
    {
        return view('pages.more.press');
    }
}
