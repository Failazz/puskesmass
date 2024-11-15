<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('utama', [
            'utama' => News::orderBy('created_at', 'desc')->paginate(4),
        ]);
    }

    public function list()
    {
        return view('news', ['news' => News::all()]);
    }

    public function show(News $post)
    {
        return view('post', ['post' => $post]);
    }
}
