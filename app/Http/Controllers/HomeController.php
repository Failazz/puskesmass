<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Article;
use App\Models\Information;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('utama', [
            'utama' => News::orderBy('tanggal', 'desc')->paginate(4, ['*'], 'news_page')->withQueryString(),
            'article' => Article::orderBy('created_at', 'desc')->paginate(4, ['*'], 'article_page')->withQueryString(),
            'information' => Information::orderBy('created_at', 'desc')->paginate(4, ['*'], 'information_page')->withQueryString()
        ]);
    }

    public function showNews(News $post)
    {
        // dd($post);
        return view('post', ['post' => $post]);
    }

    public function showInformation(Information $post_info)
    {
        // dd($post_info);
        return view('post-info', ['post_info' => $post_info]);
    }

    public function showArticle(Article $post_article)
    {
        // dd($post_article);
        return view('post-article', ['post_article' => $post_article]);
    }
    
}
