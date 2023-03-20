<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.addCategory');
    }

    public function store(Request $request)
    {
        $cat = new Category;
        $cat->name = str_replace(' ','-',$request->name);
        $cat->save();
        $cat->update(['sequence'=>$cat->id]);
        $cat->save();
        return Redirect::back()->with('success','Category Added.');
    }

    public function show()
    {
        $categories = Category::orderBy('sequence','ASC')->get();

        return view('admin.category.showCategory', compact('categories'));
    }

    public function update(Request $request)
    {
        $category = Category::find($request->cat_id);
        $category->update(['name'=>str_replace(' ','-',$request->name)]);
        $category->save();

        return Redirect::back()->with('danger','<strong class="text-primary">Category Updated.</strong>');
    }

    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        
        return Redirect::back()->with('danger','<strong class="text-danger">Category Deleted.</strong>');
    }
    public function sequence(Request $request)
    {
        foreach ($request->ids as $key => $id) {
            $category = Category::find($id);
            $category->update(['sequence'=>$request->index[$key]]);
            $category->save();
            $categories[] = $category;
        }
        return response($categories);
    }
}
