<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Collection;
use App\Models\More;
use App\Models\Press;
use Illuminate\Http\Request;

class MoreController extends Controller
{
    public function index()
    {
        $mores = More::orderBy('order', 'desc')->where('status', 1)->get();
        $collections = Collection::orderBy('order', 'desc')->where('status', 1)->get();
        return view('pages.more.index', compact('mores', 'collections'));
    }

    public function show($slug)
    {
        $more = More::where('slug', $slug)->where('status', 1)->first();
        $collection = Collection::where(
            ['status', 1],
            ['id', $more->collection_id]
        )->first();
        return view('pages.more.show', compact('more', 'collection'));
    }

    public function press($slug)
    {
        return view('pages.more.press');
    }
}
