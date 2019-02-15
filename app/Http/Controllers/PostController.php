<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        $courses=Course::all();
        return view('post.create')->with('courses',$courses);
    }


    public function store(Request $request)
    {
        $data=$request->only(['course_id','type','post']);
        $data['user_id']=auth()->user()->id;
        $post = Post::create($data);
        return redirect()->route('post.created');

    }


    public function showCreated()
    {
        $posts=auth()->user()->post;
        return view('post.show-created')->with('posts',$posts);

    }



    public function show()
    {
        $post=Post::all();
        return view('post.show')->with('post',$post);

    }


    public function edit($id)
    {
        $post=Post::find($id);
        $courses=Course::all();
        return view('post.edit')->with('post',$post)->with('courses',$courses);

    }



    public function update(Request $request,$id)
    {
        $data=$request->only(['course_id','type','post']);
        $post=Post::find($id);
        $post->update($data);
        return redirect()->route('post.created');

    }

    public function delete($id)
    {
        Post::destroy($id);
        return redirect()->route('post.created')->with('success','Post Deleted!');
    }
}
