<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Support\Facades\File;
class PostController extends Controller
{

    public function index()
    {
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        $category = Category::get();
        return view('posts.create',compact('category'));

    }


    public function store(Request $request)
    {
    //    return $_FILES;
    // return $request;
        try {
           $post=new Post();
           if($request->hasfile('image')) 
           {
               $file=$request->file('image'); 
               $ext=$file->getClientOriginalExtension(); 
               $filename=time().'.'.$ext; 
               $post->image=$filename; 
               $file->move('assets/uploads/posts',$filename);
             
          }
          $post->title=$request->title;
          $post->body=$request->body;
          $post->category_id=$request->category_id;
          $post->save();
            return redirect()->back()->with('success', 'Data saved successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show(Post $post)
    {
        //
    }


    public function edit($id)
    {
        $post = Post::findorFail($id);
        $category = Category::get();
        return view('posts.edit', compact('post','category'));
    }


    public function update(Request $request, $id)
    {

        try {
            $post = Post::findorFail($id);
            if($request->hasfile('image'))
            {
                 
                  $path='assets/uploads/posts/'.$post->image;
                  if(File::exists($path))
                  {
                      File::delete($path);
                  }
              
                  $file=$request->file('image');
                  $ext=$file->getClientOriginalExtension();
                  $filename=time().'.'.$ext;
                  $post->image=$filename;
                  $file->move('assets/uploads/posts',$filename);
    
            }
    
            $post->title=$request->title;
            $post->body=$request->body;
            $post->category_id=$request->category_id;
            $post->update();

            return redirect()->back()->with('edit', 'Data Updated successfully');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function destroy($id)
    {
        try {
            $post=Post::findorfail($id);
            $path='assets/uploads/posts/'.$post->image;
                 if(File::exists($path))
                 {
                     File::delete($path);
                 }
            Post::destroy($id);
            return redirect()->back()->with('delete', 'Data has been deleted successfully');
        } 
        catch (\Exception $e) 
        {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
