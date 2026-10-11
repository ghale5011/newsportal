<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\View;

class PageController extends BaseController
{


    public function home()
    {
        $latest_article = Article::latest()->first();
        return view('frontend.home', compact('latest_article'));
    }
}
