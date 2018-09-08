<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getIndex(){
        $posts = Post::paginate(10);

        return view('blog.index')->with('posts', $posts);
    }

    public function getSingle($slug){
        //fetch from the database based on slug
        $post = Post::where('slug', '=', $slug)->first();

        //return the view and pass the post object
        return view('blog.single')->with('post', $post);

    }
}
