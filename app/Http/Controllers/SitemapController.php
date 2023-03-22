<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {

        // return 'ok';
        $blogs  = Blog::get();

        // $post = Blog::orderBy('updated_at', 'desc')->first();

        return response()->view('frontend.pages.sitemap', [
            'posts' => $blogs,
        ])->header('Content-Type', 'text/xml');
    }

    public function pageSitemap()
    {
        return response()->view('frontend.pages.page-sitemap')->header('Content-Type', 'text/xml');
    }
    public function categorySiteMap()
    {
        $categories = Category::get();
        return response()->view('frontend.pages.category-sitemap', [
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }
}
