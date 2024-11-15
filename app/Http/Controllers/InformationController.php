<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        return view('utama', [
            'utama' => Information::orderBy('created_at', 'desc')->paginate(4),
        ]);
    }

    public function list()
    {
        return view('information', ['information' => Information::all()]);
    }

    public function show(Information $post_info)
    {
        return view('post-info', ['post_info' => $post_info]); // Mengganti 'post-info' menjadi 'post_info'
    }

    
}
