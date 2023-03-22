<?php

namespace App\Http\Controllers;

use App\Jobs\MailSendingJobs;
use App\Mail\AddWriterMail;
use App\Models\BewriterInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class BeWriterController extends Controller
{

    /**
     * This construct method for controll the route  permisisons.
     */

    public function __construct()
    {
        $this->middleware('permission:bewriter_view', ['only' => ['show']]);
        $this->middleware('permission:bewriter_add', ['only' => ['edit', 'store']]);
        $this->middleware('permission:bewriter_delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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


        $addUser = new User();
        $addUser->fname = $request->fname;
        $addUser->lname = $request->lname;
        $addUser->email = $request->email;
        $addUser->orginalemail = $request->orginalemail;
        $addUser->dob = $request->dob;
        $addUser->phone = $request->phone;
        $addUser->country = $request->country;
        $addUser->password = Hash::make($request->password);
        $addUser->save();

        $mailData = [
            'fname' => $request->fname,
            'title' => 'Congratulations your Writer Account has been Approved.',
            'body' => 'Please use this credentials to login our platfrom',
            'email' => $request->email,
            'password' => $request->password,
            'loginAddress' => route('login'),
        ];
        $mailto = $request->orginalemail;

        Mail::to($mailto)->send(new AddWriterMail($mailData));

        // MailSendingJobs::dispatch($mailto, $mailData);
        return redirect()->back()->with('success', 'New Writer Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['userData'] = BewriterInfo::find($id);
        $readMsg = BewriterInfo::find($id);
        $readMsg->status = "1";
        $readMsg->update();
        return view('backend.pages.contactus.bewriter.read', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['userData'] = BewriterInfo::find($id);
        $readMsg = BewriterInfo::find($id);
        $readMsg->status = "1";
        $readMsg->update();
        return view('backend.pages.contactus.bewriter.adduser', $data);
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
        $permentDelete = BewriterInfo::find($id);
        $file_path = public_path('file/cv/') . "" . $permentDelete->cv;
        unlink($file_path);
        $permentDelete->delete();
        return redirect()->back()->with('success', 'Information deleted succesfully');
    }
}
