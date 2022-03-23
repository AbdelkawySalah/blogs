<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
class TestController extends Controller
{
    public function index()
    {
        $posts=Post::get();
        return $posts;
    }

    public function showcat()
    {
        $categ=Category::all();
        return $categ;
    }

    }
   
