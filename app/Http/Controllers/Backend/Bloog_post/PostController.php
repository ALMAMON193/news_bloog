<?php

namespace App\Http\Controllers\Backend\Bloog_post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PostController extends Controller
{
    public function view(){
        $data['allData'] = Post::all();
        $data['categories'] = Category::where('status',1)->get();
        return view('backend.bloog.view_bloog',$data);
    }
    public function create(Request $request){
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
           
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => 'required',
                    ],[
            'title.required' => 'Please input title',
            'category_id.required' => 'Please input category',
            
            'short_description.required' => 'Please input short description',
            'long_description.required' => 'Please input long description',
            'image.required' => 'Please input image',
        ]);
        $bloog = new Post();
        $bloog->title = $request->title;
        $bloog->tags = $request->tags;
        $bloog->category_id = $request->category_id;
        $bloog->short_description = $request->short_description;
        $bloog->long_description = $request->long_description;
        $bloog->image = $request->image;
      
       
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/bloog_images/'), $filename);
            $bloog->image = $filename;
        }
        if($bloog->save()){
            return response()->json([
                'status' => 200,
                'message' => 'Bloog created successfully'
            ]);
        }else{
            return response()->json([
                'status' => 400,
                'message' => 'Bloog not created'
            ]);
        }
    }
 
    
}
