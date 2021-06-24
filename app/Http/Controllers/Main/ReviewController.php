<?php

namespace App\Http\Controllers\Main;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Review;

class ReviewController extends Controller
{
  public function add()
  {
      return view('site.post');
  }
  
  public function create(Request $request)
  {
      $this->validate($request,Review::$rules);
      $reviews = new Review;
      $form = $request->all();
      
      if(isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $reviews->image_path = basename($path);
      } else {
        $reviews->image_path =null;
      }
      
      unset($form['_token']);
      unset($form['image']);
      
      $reviews->fill($form);
      $reviews->save();
      
      return redirect('site.post');
  } 
  
  public function index(Request $request)
  {
    $cond_title = $request->cond_title;
    if ($cond_title != '') {
      $posts = Review::where('title', $cond_title)->get();
    } else {
      $posts = Review::all();
    }
     return view('site.review', ['posts' => $posts, 'cond_title' => $cond_title]);
 }
}