<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;

class AreaController extends Controller
{
  public function index()
  {
    $areas = Area::all();
    return view('site.index', ['areas' => $areas]);
  }
}