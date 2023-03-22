<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
  
         $user = Auth::user();
        if ($user->hasAnyRole('Administrator', 'Editor','Writer')) {
            return view('backend.pages.dashboard.dashboard');
         } else {
          $user->assignRole('Pending');
        return view('backend.pages.dashboard.dashboard');

         }
     

    //  return view('backend.pages.dashboard.dashboard');
    }
}