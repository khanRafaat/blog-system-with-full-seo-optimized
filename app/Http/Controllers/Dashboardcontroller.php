<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Blog;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.pages.dashboard.dashboard');
    }
}