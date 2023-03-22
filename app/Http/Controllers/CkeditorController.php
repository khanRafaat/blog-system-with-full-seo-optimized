<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

use Validator, Redirect, Response;

class CkeditorController extends Controller
{

    public function upload(Request $request)
    {

        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = Str::slug($fileName);
            $fileName = time() . '-' . $fileName.'.' .$extension;
            $request->file('upload')->move(public_path('image/bodyimage/'), $fileName);
            // Image::make($request->file('upload'))->save(public_path('image/bodyimage/') . $fileName);
            $url = asset('image/bodyimage/' . $fileName );
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);

            // $originName = $request->file('image')->getClientOriginalName();
            // $fileName = pathinfo($originName, PATHINFO_FILENAME);
            // $fileName = Str::slug($fileName);
            // $extension = $request->file('image')->getClientOriginalExtension();
            // $fileName = $fileName . '_' . time() . '.' . $extension;
            // $request->file('image')->move(public_path('image/'), $fileName);
            // // $request->file('image')->move(public_path('image/thumbnail/'), $fileName);
            // // $request->file('image')->move(public_path('image/socialmedia/'), $fileName);
            // $blogPost->image = "$fileName";
            // $blogPost->thumbnail = "$fileName";
            // $blogPost->socialmediaimage = "$fileName"

        }


    }
}
