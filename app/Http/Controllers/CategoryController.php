<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
// use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::get();
        return view('category.index', compact('category'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
                'category' => ['required','min:4',
                            Rule::unique('categories')
                           ],
        ]);

        if ($validator->fails())
        {
        //   $categories = $request->All();
        //   $input=array('category'=>$categories['categorys']);
        return response()->json(['error'=>$validator->errors()->all()]);

        }
        else {
            $cate=Category::create($request->all());
            if(!is_null($cate)) {
              return response()->json(['success'=>'Added new records.']);
            }
  
          }
    
    }

    public function edit($id)
    {
      $Category=Category::findorfail($id);
      if($Category)
      {
        return response()->json($Category);
      }
    }

    public function update(Request $request,$id)
    {
      $req=Validator::make($request->all(),[
        'category'=> ['required',
           Rule::unique('categories')->where(function ($query) use ($id)
          {
                    return $query->where('id','!=',$id);
           }),
        ],
    ]);

    
  if ($req->passes())
      {
        $categories = $request->All();   
        Category::where('id',$id)->update(['category'=>$categories['category']]);
          return response()->json(['success'=>'updated new records.']);
      }
      else
      {
          return response()->json(['error'=>$req->errors()->all()]);
      }


    }

    public function destroy($id)
    {
      Category::where('id',$id)->delete();
    }

}
