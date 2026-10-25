<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Article;
use App\Models\Category;

class PageController extends BaseController
{


    public function home()
    {
        $latest_article = Article::latest()->first();
        return view('frontend.home', compact('latest_article'));
    }
    public function category($slug)
    {
        $category = Category::where("slug", $slug)->first();
        $articles = $category->articles()->latest()->get();

        return view('frontend.category', compact('category', 'articles'));
    }
}
