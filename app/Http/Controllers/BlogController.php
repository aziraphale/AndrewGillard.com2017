<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $posts = BlogPost::where('draft', 0)->orderBy('publication_date', 'desc')->paginate(5);
        return view('blog.index', ['posts'=>$posts]);
    }

    public function view(Request $request, $id, $slug = '')
    {
        $post = BlogPost::where('draft', 0)->find($id)->first();
        return view('blog.view', ['post'=>$post]);
    }

    public function rss()
    {
        $posts = BlogPost::where('draft', 0)->orderBy('publication_date', 'desc')->paginate(10);
        return view('blog.rss', ['posts'=>$posts]);
    }
}
