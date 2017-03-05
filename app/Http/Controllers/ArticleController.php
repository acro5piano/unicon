<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{

    public function index_web()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
        // return view('welcome');
    }
}
