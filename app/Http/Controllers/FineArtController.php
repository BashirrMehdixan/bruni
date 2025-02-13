<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FineArtController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('order', 'asc')->where('status', 1)->get();
        return view('pages.fineart.index', compact('categories'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->where('status', 1)->first();
        if (!$category) {
            abort(404);
        }
        $arts = $category->arts()->orderBy('created_at', 'desc')->where('status', 1)->get();
        return view('pages.fineart.show', compact('arts', 'category'));
    }
}
