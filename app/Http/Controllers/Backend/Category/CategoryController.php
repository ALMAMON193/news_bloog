<?php

namespace App\Http\Controllers\Backend\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

  public function view(){
    $data['allData']=Category::all();
    return view('backend.category.view_category',$data);
  }

  public function Add(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ], [
            'name.required' => 'Please enter category name',
            'description.required' => 'Please enter category description',
            'image.required' => 'Please select an image',
        ]);
    
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/category_image/'), $filename);
            $category->image = $filename;
        }
    
        if ($category->save()) {
            return response()->json(['message' => 'Category created successfully'], 200);
        } else {
            return response()->json(['message' => 'Failed to create category'], 500);
        }
    }
    
}
