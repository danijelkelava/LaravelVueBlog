<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    	$last_three_posts = [];
    	return view('index', compact('last_three_posts'));
    }

    public function show()
    {
    	$posts = [];
    	return view('blog', compact('posts'));
    }
}
