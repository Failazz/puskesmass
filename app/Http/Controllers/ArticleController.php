<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('utama', [
            'utama' => Article::orderBy('created_at', 'desc')->paginate(4),
        ]);
    }

    public function list()
    {
        return view('article', ['article' => Article::all()]);
    }

    public function show(Article $post_article)
    {
        return view('post-article', ['post_article' => $post_article]); // Mengganti 'post-info' menjadi 'post_info'
    }

    
}
