<?php

namespace App\Http\Controllers;

use App\Models\Art;
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
        $arts = Art::orderBy('title', 'desc')->where('status', true)->get();
        return view('pages.store.scarves', compact('arts'));
    }
}
