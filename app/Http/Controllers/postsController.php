<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class postsController extends Controller
{
    public function index()
    {

        $posts=Post::all();
        return  response()->json($posts);
        //return view('posts.index',compact('posts'));
    }
}

