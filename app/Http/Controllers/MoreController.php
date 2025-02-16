<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\More;
use App\Models\Press;
use Illuminate\Http\Request;

class MoreController extends Controller
{
    public function index()
    {
        $mores = More::orderBy('created_at', 'desc')->where('status', 1)->get();
        $books = Book::orderBy('created_at', 'desc')->where('status', 1)->get();
        $presses = Press::orderBy('created_at', 'desc')->where('status', 1)->get();
        return view('pages.more.index', compact('mores', 'books', 'presses'));
    }

    public function show($slug)
    {
        $more = More::where('slug', $slug)->where('status', 1)->first();
        return view('pages.more.show', compact('more'));
    }

    public function press($slug)
    {
        return view('pages.more.press');
    }
}
