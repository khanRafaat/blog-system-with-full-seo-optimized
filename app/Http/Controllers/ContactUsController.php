<?php

namespace App\Http\Controllers;

use App\Models\BewriterInfo;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    /**
     * This construct method for controll the route  permisisons.
     */

    public function __construct()
    {
        $this->middleware('permission:contact_us_inbox', ['only' => ['index']]);
        $this->middleware('permission:contact_us_view', ['only' => ['show']]);
        $this->middleware('permission:contact_us_delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['beWriterReq'] = BewriterInfo::orderBy('status', 'DESC')->get();
        $data['contactUsData'] = ContactUs::latest()->get();
        return view('backend.pages.contactus.index', $data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactus = ContactUs::find($id);

        return view('backend.pages.contactus.show', compact('contactus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permentDelete = ContactUs::find($id);
        $permentDelete->delete();
        return redirect()->back()->with('success', 'Message deleted Succesfully');
    }
}
