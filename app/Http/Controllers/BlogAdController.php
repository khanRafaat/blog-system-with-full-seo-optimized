<?php

namespace App\Http\Controllers;

use App\Models\BlogAd;
use App\Http\Requests\StoreBlogAdRequest;
use App\Http\Requests\UpdateBlogAdRequest;

class BlogAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.blogad.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogAdRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogAdRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogAd  $blogAd
     * @return \Illuminate\Http\Response
     */
    public function show(BlogAd $blogAd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogAd  $blogAd
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogAd $blogAd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogAdRequest  $request
     * @param  \App\Models\BlogAd  $blogAd
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogAdRequest $request, BlogAd $blogAd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogAd  $blogAd
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogAd $blogAd)
    {
        //
    }
}
