<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all()->take(5);
        return $articles;
    }

    public function show($id)
    {
        $article = Article::find($id);
        return $article;
    }
}
