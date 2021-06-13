<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
  public function add()
  {
      return view('site.post');
  }

 
  public function create(Request $request)
  {
      
      return redirect('site.post');
  }  
}