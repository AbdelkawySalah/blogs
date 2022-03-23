<?php

namespace App\Http\Controllers\FrontController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
class CategoryController extends Controller
{
    public function index()
    {
     
        $category=Category::get();
        $posts=Post::orderBy('id','desc')->take(4)->get();
        $Toppost=Post::orderBy('id','desc')->take(10)->get();
       return view('frontend.home',compact('posts','Toppost','category'));
      
        
    }

    public function showdetails($id)
    {
       
        $category=Category::get();
        $post=Post::findorfail($id);
        return view('frontend.post_details',compact('post','category'));
    }

    public function showposts($id)
    {
        $category=Category::get();
        $category_name=Category::where('id',$id)->first('category');
        $allpost=Post::where('category_id',$id)->get();
         return view('frontend.showposts',compact('category','allpost','category_name'));

    }

  public function showallpost()
  {
    $category=Category::get();
    $allposts=Post::get();     
    return view('frontend.allposts',compact('category','allposts'));
  }
    public function show($post)
    {
        return view('welcome');
    }
}
