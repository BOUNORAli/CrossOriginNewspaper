<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function indexJson()
    {
        $articles = Article::all();
        return response()->json($articles);
    }
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }
}
