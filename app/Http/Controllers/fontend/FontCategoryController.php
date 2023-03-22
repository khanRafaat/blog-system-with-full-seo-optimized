<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class FontCategoryController extends Controller
{
    public function index(Request $request)
    {
        $data['catName'] = Category::select('category_name')->where('category_slug', $request->slug)->get();
        $data['recent'] = Blog::latest()->get()->take(5);
        $catID = Category::select('id')->where('category_slug', $request->slug)->get();
        foreach ($catID as $id) {
            $data['blogs'] =  Category::find($id->id)->blogs;
        }
        return view('frontend.pages.category', $data);
    }
    public function show($slug)
    {


        $blog = Blog::where('slug', $slug)->firstORfail();
        $blog->increment('views');
        $blogs = Blog::all();
        $categories = Category::all();


        return view('frontend.pages.blogsingle', compact('categories', 'blogs', 'blog'));
    }
}
