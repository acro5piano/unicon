<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{

    public function index_web()
    {
        $articles = Article::take(5);
        return view('articles.index', ['articles' => $articles]);
    }
}
