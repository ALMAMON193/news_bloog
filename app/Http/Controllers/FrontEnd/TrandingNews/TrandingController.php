<?php

namespace App\Http\Controllers\FrontEnd\TrandingNews;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrandingController extends Controller
{
    public function index(){
        $data['trendingPosts'] = Post::orderBy('id', 'desc')
        ->take(10) 
        ->get();
         
        return view('front-end.home-all.trending_news',$data);
       
    }
    
}
