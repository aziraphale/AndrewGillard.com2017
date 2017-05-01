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

    public function view(Request $request, $year, $month, $slug)
    {
        $post = BlogPost::where('draft', 0)->where('slug', $slug)->first();
        return view('blog.view', ['post'=>$post]);
    }

    public function viewFromId(Request $request, $id, $slug = '')
    {
        $post = BlogPost::where('draft', 0)->where('id', $id)->first();
        return view('blog.view', ['post'=>$post]);
    }

    public function category(Request $request, $categorySlug)
    {
        abort_unless(in_array($categorySlug, BlogPost::validCategoriesSlugs(), true), 404);
        $categoryName = BlogPost::categorySlugToName($categorySlug);

        $posts = BlogPost::where('draft', 0)->where('categories', 'LIKE', "%$categoryName%")->orderBy('publication_date', 'desc')->paginate(5);
        return view('blog.category', ['posts'=>$posts, 'categoryName'=>$categoryName, 'categorySlug'=>$categorySlug]);
    }

    public function rss()
    {
        $posts = BlogPost::where('draft', 0)->orderBy('publication_date', 'desc')->paginate(10);
        return view('blog.rss', ['posts'=>$posts]);
    }
}
