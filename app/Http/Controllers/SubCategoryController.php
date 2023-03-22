<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class SubCategoryController extends Controller
{
    public function index()
    {

       
        $catData = Category::get();

        return view('backend.pages.subcategory.index', compact('catData'));

        
    }

    public function store(Request $request)
    {

    //    return $request;
        $this->validate($request, [
            'category_id' => 'required',
            'subcategory_name' => 'required|unique:subcategories,subcategory_name'
        ], [
            'category_id.required' => 'Please select a category!',
            'subcategory_name.unique' => 'SubCategory already exist!',
            'subcategory_name.required' => 'Please insert subcategory Name'
        ]);

        $subCat = new SubCategory();
        $subCat->category_id = $request->category_id;
        $subCat->subcategory_name = $request->subcategory_name;
        $subCat->subcategory_slug = Str::slug($request->subcategory_name);
       $subCat->save();
        return response()->json(['success' => 'Category Saved']);
    }


}
