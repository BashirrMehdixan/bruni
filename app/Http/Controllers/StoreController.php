<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('pages.store.index');
    }

    public function portfolio()
    {
        return view('pages.store.portfolio');
    }

    public function scarves()
    {
        return view('pages.store.scarves');
    }
}
