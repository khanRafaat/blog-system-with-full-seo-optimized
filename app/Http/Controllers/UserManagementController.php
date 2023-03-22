<?php

namespace App\Http\Controllers;

use App\Mail\AddUserMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;

class UserManagementController extends Controller
{
    /**
     * This construct method for controll the route  permisisons.
     */

    public function __construct()
    {
       $this->middleware('permission:user_management', ['only' => ['index']]);
       $this->middleware('permission:user_create', ['only' => ['create','store']]);
       $this->middleware('permission:user_edit', ['only' => ['edit','update']]);
       $this->middleware('permission:user_delete', ['only' => ['destroy']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();
        return view('backend.pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['roles'] = Role::all();
        return view('backend.pages.user.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->syncRoles($request->role);
        $user->email = $request->email;
        $user->orginalemail = $request->email;
        $user->position = $request->position;
        $user->status = $request->status;
        $user->password = Hash::make($request->password);
        $user->save();
        $mailData = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email'=> $request->email,
            'password'=> $request->password,
        ];
        // Mail::to($request->orginalemail)->send(new AddWriterMail($mailData));
        
        Mail::to($request->email)->send(new AddUserMail($mailData));
        return redirect()->route('user.index')->with('success', 'New user added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['users'] = User::find($id);
        $data['roles'] = Role::all();
        foreach (User::find($id)->roles->take(1) as $userRole) {
            $data['assignedRole'] = $userRole->id;
        }
        return view('backend.pages.user.edit', $data);
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
        $updateUser = User::find($id);
        $updateUser->fname = $request->fname;
        $updateUser->lname = $request->lname;
        $updateUser->syncRoles($request->role);
        $updateUser->email = $request->email;
        $updateUser->position = $request->position;
        $updateUser->status = $request->status;
        if (!$request->password == NULL) {
            $updateUser->password = Hash::make($request->password);
        }
        $updateUser->update();
        return redirect()->route('user.index')->with('success', 'User information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index')->with('success', 'User deleted Succesfully');
    }
}
