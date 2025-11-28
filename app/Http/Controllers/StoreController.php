<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Portfolio;
use App\Models\store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = store::orderBy('order', 'desc')->get();
        return view('pages.store.index', compact('stores'));
    }

    public function portfolio()
    {
        $arts = Art::orderBy('order', 'desc')->where([
            ['portfolio', true],
            ['status', true]
        ])->get();
        $portfolio = Portfolio::first();
        return view('pages.store.portfolio', compact('arts', 'portfolio'));
    }

    public function scarves()
    {
        $arts = Art::orderBy('order', 'desc')->where([
            ['store', true],
            ['status', true]
        ])->get();
        return view('pages.store.scarves', compact('arts'));
    }

    public function show($slug)
    {
        if ($slug === 'portfolio') {
            $arts = Art::orderBy('order', 'desc')->where([
                ['portfolio', true],
                ['status', true]
            ])->get();
            $portfolio = Portfolio::first();
            return view('pages.store.portfolio', compact('arts', 'portfolio'));
        } else {
            $arts = Art::orderBy('order', 'desc')->where([
                ['store', true],
                ['status', true]
            ])->get();
            return view('pages.store.scarves', compact('arts'));
        }
    }
}
