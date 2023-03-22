<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class FronthomeController extends Controller
{
    public function index()
    {
        $data['blogs']  = Blog::where('status','active')->orderBy('id', 'DESC')->paginate(20);
        return view('frontend.index',  $data);
    }


    public function main()
    {
        $data['populerPost']  = $this->getViews();
        $data['blogs']  = Blog::where('status','active')->orderBy('id', 'DESC')->paginate(20);
        $data['categories']  = Category::with('blogs')->get();
        return view('frontend.pages.main', $data);
    }

    public function privacy()
    {
        return view('frontend.pages.privacy-policy');
    }

    public  function adPolicy()
    {

        return view('frontend.pages.adpolicty');
    }

    public function termscondition()
    {
        return view('frontend.pages.terms-conditions');
    }



    public function beWriter()
    {
        return view('frontend.pages.writer');
    }

    public function about()
    {
        return view('frontend.pages.aboutus');
    }



    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function blo(Request $request)
    {
        $blogs = Blog::all();
        // dd($blogs);
        return view('frontend.pages.blog', compact('blogs'));
    }


    public function categoryView()
    {

        $data['blogs']  = Blog::orderBy('id', 'DESC')->paginate(20);
        $data['categories']  =  Category::all();

        return view('frontend.pages.category', $data);
    }
    public function getViews()
    {
        return Blog::where('status','active')->orderBy('views', 'desc')->get()->take(5);
    }
}
