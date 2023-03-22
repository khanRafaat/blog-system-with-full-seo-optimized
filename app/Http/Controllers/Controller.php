<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
  {
  $catgorr = Category::get();
    View::share('catgorr', $catgorr);
  }
}