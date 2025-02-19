<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
        $works = Art::orderBy('created_at', 'asc')->where('status', 1)->where('work', true)->get();
        return view('pages.works.index', compact('works'));
    }
}
