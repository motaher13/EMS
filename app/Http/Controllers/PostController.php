<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
        $data=$request->only(['course_id','post']);
        $post = Post::create($data);
        return redirect()->route('post.created');

    }


    public function showCreated()
    {
        $post=auth()->user()->post;
        return view('post.show-created')->with('post',$post);

    }



    public function show()
    {
        $post=Post::all();
        return ('post.show')->with('post',$post);

    }
}
