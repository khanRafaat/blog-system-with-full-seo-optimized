<?php

namespace App\Http\Controllers;

use App\Models\WriterQuestion;
use App\Http\Requests\StoreWriterQuestionRequest;
use App\Http\Requests\UpdateWriterQuestionRequest;

class WriterQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreWriterQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWriterQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WriterQuestion  $writerQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(WriterQuestion $writerQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WriterQuestion  $writerQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(WriterQuestion $writerQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWriterQuestionRequest  $request
     * @param  \App\Models\WriterQuestion  $writerQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWriterQuestionRequest $request, WriterQuestion $writerQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WriterQuestion  $writerQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(WriterQuestion $writerQuestion)
    {
        //
    }
}
