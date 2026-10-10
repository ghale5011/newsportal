<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;

class PageController extends Controller
{
    public function home()
    {
        $latest_article = Article::latest()->first();
        return view('frontend.home', compact('latest_article'));
    }
}
