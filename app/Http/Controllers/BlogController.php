<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogValidation;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pblogs'] = Blog::where('status', '=', 'active')->orderBy('id', 'DESC')->paginate(10, ['*'], 'published');
        $data['ublogs'] = Blog::where('status', '=', 'inactive')->orderBy('id', 'DESC')->paginate(10, ['*'], 'inactive');
        $data['cblogs'] = Blog::where('status', '=', 'correction')->orderBy('id', 'DESC')->paginate(10, ['*'], 'correction');
        $data['rblogs'] = Blog::where('status', '=', 'rejected')->orderBy('id', 'DESC')->paginate(10, ['*'], 'rejected');
        return view('backend.pages.blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        // return $roles = Auth::user()->getRoleNames();

        // $role = Role::create(['name' => 'Author']);

        $categories = Category::get();
        // dd($categories);
        return view('backend.pages.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogValidation $request)
    {
        $blogPost = new Blog();
        $blogPost->title = $request->title;
        $blogPost->slug = Str::slug($request->slug);
        $blogPost->summary = $request->summary;
        $blogPost->description = $request->description;
        $blogPost->user_id = Auth::user()->id;
        $blogPost->imagealt = $request->imagealt;
        $blogPost->keywords = $request->keywords;
        if ($request->filled('status')) {
            $blogPost->status = $request->status;
        } else {
            $blogPost->status = "inactive";
        }

        // if ($request->hasFile('image')) {
        //     $originName = $request->file('image')->getClientOriginalName();
        //     $fileName = pathinfo($originName, PATHINFO_FILENAME);
        //     $fileName = Str::slug($fileName);
        //     $smallthumbnail = $fileName . time();
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     $mainFile = $fileName;
        //     Image::make($request->file('image'))->encode('webp')->resize(300, 185)->save(public_path('image/thumbnail/') . $smallthumbnail . '.webp');

        //     $mainImage = Image::make($request->file('image'))->encode('webp');
        //     $mainImage->resize(900, 500, function ($constraint) {
        //         $constraint->aspectRatio();
        //     });
        //     $mainImage->save(public_path('image/') . $mainFile . '.webp', 50, 'webp');
        //     $blogPost->image = $mainFile . '.webp';
        //     $blogPost->thumbnail = $smallthumbnail . '.webp';
        // }

        // if ($request->hasFile('image')) {
        //     $originName = $request->file('image')->getClientOriginalName();
        //     $fileName = pathinfo($originName, PATHINFO_FILENAME);
        //     $fileName = Str::slug($fileName);
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     $smallthumbnail = $fileName . time() . '.' . $extension;
        //     $mainFile = $fileName . '.' . $extension;
        //     $socialMedia = time() . '-' . $fileName . '.' . $extension;;
        //     Image::make($request->file('image'))->save(public_path('image/thumbnail/') . $smallthumbnail);
        //     Image::make($request->file('image'))->save(public_path('image/socialmedia/') . $socialMedia);
        //     $mainImage = Image::make($request->file('image'));
        //     $mainImage->resize(900, 500, function ($constraint) {
        //         $constraint->aspectRatio();
        //     });
        //     $mainImage->save(public_path('image/') . $mainFile);
        //     $blogPost->image = $mainFile;
        //     $blogPost->thumbnail = $smallthumbnail;
        //     $blogPost->socialmediaimage = $socialMedia;
        // }

        if ($request->hasFile('image')) {
            $originName = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $fileName = Str::slug($fileName);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('image')->move(public_path('image/'), $fileName);
            // $request->file('image')->move(public_path('image/thumbnail/'), $fileName);
            // $request->file('image')->move(public_path('image/socialmedia/'), $fileName);
            $blogPost->image = "$fileName";
            $blogPost->thumbnail = "$fileName";
            $blogPost->socialmediaimage = "$fileName";
        }

        $blogPost->save();
        $blogPost->categories()->attach($request->category_id);

        return redirect()->route('getmy.post')->with('success', 'Blog created successfully.');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $categories = Category::all();
        return view('backend.pages.blog.show', compact('blog', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        $blogs = $blog;
        return view('backend.pages.blog.edit', compact('blogs', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',

        ]);

        $blogUpdate = Blog::find($id);
        $blogUpdate->title = $request->title;
        $blogUpdate->slug = Str::slug($request->slug);
        $blogUpdate->summary = $request->summary;
        $blogUpdate->status = $request->status;
        $blogUpdate->description = $request->description;
        $blogUpdate->imagealt = $request->imagealt;
        $blogUpdate->keywords = $request->keywords;
        // if ($request->hasFile('image')) {

        //     $image_path = public_path('image/') . "" . $blogUpdate->image;
        //     if (file_exists($image_path)) {
        //         unlink($image_path);
        //     }
        //     $thumbnail_path = public_path('image/thumbnail/') . "" . $blogUpdate->thumbnail;
        //     if (file_exists($thumbnail_path)) {
        //         unlink($thumbnail_path);
        //     }
        //     $originName = $request->file('image')->getClientOriginalName();
        //     $fileName = pathinfo($originName, PATHINFO_FILENAME);
        //     $fileName = Str::slug($fileName);
        //     $smallthumbnail = $fileName . time();
        //     $mainFile = $fileName;
        //     Image::make($request->file('image'))->encode('webp', 100)->resize(300, 185)->save(public_path('image/thumbnail/') . $smallthumbnail . '.webp');
        //     Image::make($request->file('image'))->encode('webp', 100)->save(public_path('image/') . $mainFile . '.webp');
        //     $blogUpdate->image = $mainFile . '.webp';
        //     $blogUpdate->thumbnail = $smallthumbnail . '.webp';
        // }

        // if ($request->hasFile('image')) {
        //     $image_path = public_path('image/') . "" . $blogUpdate->image;
        //     if (file_exists($image_path)) {
        //         unlink($image_path);
        //     }
        //     $thumbnail_path = public_path('image/thumbnail/') . "" . $blogUpdate->thumbnail;
        //     if (file_exists($thumbnail_path)) {
        //         unlink($thumbnail_path);
        //     }
        //     $originName = $request->file('image')->getClientOriginalName();
        //     $fileName = pathinfo($originName, PATHINFO_FILENAME);
        //     $fileName = Str::slug($fileName);
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     $smallthumbnail = $fileName . time() . '.' . $extension;
        //     $mainFile = $fileName . '.' . $extension;
        //     $socialMedia = time() . '-' . $fileName;
        //     Image::make($request->file('image'))->resize(300, 185)->save(public_path('image/thumbnail/') . $smallthumbnail);
        //     Image::make($request->file('image'))->encode('png')->resize(1200, 630)->save(public_path('image/socialmedia/') . $socialMedia . '.png');
        //     $mainImage = Image::make($request->file('image'));
        //     $mainImage->resize(900, 500, function ($constraint) {
        //         $constraint->aspectRatio();
        //     });
        //     $mainImage->save(public_path('image/') . $mainFile);
        //     $blogUpdate->image = $mainFile;
        //     $blogUpdate->thumbnail = $smallthumbnail;
        //     $blogUpdate->socialmediaimage = $socialMedia . '.png';;
        // }

        if ($request->hasFile('image')) {
            $image_path = public_path('image/') . "" . $blogUpdate->image;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $thumbnail_path = public_path('image/thumbnail/') . "" . $blogUpdate->thumbnail;
            if (file_exists($thumbnail_path)) {
                unlink($thumbnail_path);
            }
            $originName = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $fileName = Str::slug($fileName);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('image')->move(public_path('image/'), $fileName);
            // $request->file('image')->move(public_path('image/thumbnail/'), $fileName);
            // $request->file('image')->move(public_path('image/socialmedia/'), $fileName);
            $blogUpdate->image = "$fileName";
            $blogUpdate->thumbnail = "$fileName";
            $blogUpdate->socialmediaimage = "$fileName";
        }
        $blogUpdate->update();
        $blogUpdate->categories()->sync($request->category_id);

        return redirect()->route('getmy.post')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()
            ->with('success', 'Post Trashed successfully');
    }

    public function myPost()
    {
        $userID = Auth::user()->id;
        $data['pblogs'] = Blog::where('user_id', '=', $userID)
            ->where('status', '=', 'active')
            ->orderBy('id', 'DESC')
            ->paginate(10, ['*'], 'published');

        $data['ublogs'] = Blog::where('user_id', '=', $userID)
            ->where('status', '=', 'inactive')
            ->orderBy('id', 'DESC')
            ->paginate(10, ['*'], 'unpublished');

        $data['cblogs'] = Blog::where('user_id', '=', $userID)
            ->where('status', '=', 'correction')
            ->orderBy('id', 'DESC')
            ->paginate(10, ['*'], 'correction');

        return view('backend.pages.blog.myblog', $data);
    }

    public function trashedItem()
    {
        $data['users'] = User::get();
        $data['tblogs'] = Blog::onlyTrashed()
            ->paginate(10);

        return view('backend.pages.trash.index', $data);
    }
    public function restoreTrash($id)
    {
        $data['getreStore'] = Blog::onlyTrashed()->findOrFail($id);
        $data['users'] = User::get();
        return  view('backend.pages.trash.restore', $data);
    }
    public function restoreFinal(Request $request, $id)
    {
        $updateWriter = Blog::withTrashed()->find($id);
        $updateWriter->user_id = $request->writer;
        $updateWriter->update();
        Blog::withTrashed()->find($id)->restore();
        return redirect()->route('getTrashedItem')->with('success', 'Post Restore Successfully');
    }
    public function forceDelete($id)
    {
        $permentDelete = Blog::onlyTrashed()->findOrFail($id);
        $permentDelete->forceDelete();
        $image_path = public_path('image/') . "" . $permentDelete->image;
        $image_path_thumb = public_path('image/thumbnail/') . "" . $permentDelete->thumbnail;
        $image_path_social = public_path('image/socialmedia/') . "" . $permentDelete->socialmediaimage;
        unlink($image_path); 
        // unlink($image_path_thumb); 
        // unlink($image_path_social);
        return redirect()->back()->with("success", "Post Delete Permentlty");
    }
}
