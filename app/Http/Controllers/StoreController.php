<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('pages.store.index');
    }

    public function portfolio()
    {
        $arts = Art::orderBy('created_at', 'asc')->where('status', true)->where('portfolio', true)->get();
        $portfolio = Portfolio::first();
        return view('pages.store.portfolio', compact('arts', 'portfolio'));
    }

    public function scarves()
    {
        $arts = Art::orderBy('created_at', 'asc')->where('status', true)->where('store', true)->get();
        return view('pages.store.scarves', compact('arts'));
    }
}
