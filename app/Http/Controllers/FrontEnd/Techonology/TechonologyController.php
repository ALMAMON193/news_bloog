<?php

namespace App\Http\Controllers\FrontEnd\Techonology;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TechonologyController extends Controller
{
    public function Techolonogy(){

        $technologyPosts = Post::whereHas('category', function($query) {
            $query->where('name', 'technology');
        })->get();

        
        return view('front-end.home-all.techonology',compact('technologyPosts'));
    }
}
