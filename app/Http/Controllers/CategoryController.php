<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Area;

class CategoryController extends Controller
{
  public function index(Request $request)
  {
    $area = Area::find($request->id);
    $categories = Category::all();
    return view('site.category', ['categories' => $categories, 'area' => $area]);
  }
}