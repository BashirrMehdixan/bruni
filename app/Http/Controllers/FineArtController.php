<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FineArtController extends Controller
{
    public function index()
    {
        return view('pages.fineart.index');
    }

    public function show($slug)
    {
        return view('pages.fineart.show');
    }
}
