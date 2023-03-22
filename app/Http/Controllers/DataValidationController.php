<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DataValidationController extends Controller
{
    public function index(Request $request)
    {

        $slug = $request->input('slug');
        $isExists = Blog::where('slug', $slug)->first();
        if ($isExists) {
            return response()->json(array("exists" => true));
        } else {
            return response()->json(array("exists" => false));
        }
    }

    public function searchBlog(Request $request)
    {
        $blogs = DB::table('blogs')->where('title', 'LIKE', '%' . $request->search . "%")->where('status', 'active')->get();
        return view('frontend.pages.search', compact('blogs'));
    }
    public function searchAutoComplete(Request $request)
    {
        $blogs = Blog::select("title as value", "id")->where('title', 'LIKE', '%' . $request->search . '%')->get();
        return response()->json($blogs);
    }
    public function getCatgory()
    {
        $data['catagoryData'] = Category::all();
        return response()->json($data);
    }
    public function Addcatgory(Request $request)
    {
        $this->validate(
            $request,
            ['addcategory' => 'required|unique:categories,category_name'],
            [
                'addcategory.required' => 'Category field empty!',
                'addcategory.unique' => 'Category already exist!'
            ]
        );

        $addCat =  new Category();
        $addCat->category_name = $request->addcategory;
        $addCat->category_slug = Str::slug($request->addcategory);
        $addCat->save();
        return response()->json(['success' => 'Category Saved']);
    }

    public function clearcache()
    {

        Artisan::call('route:cache');
        Artisan::call('config:cache');
        Artisan::call('cache:clear');
        Artisan::call('view:clear');

        return Redirect()->back();
    }
}
