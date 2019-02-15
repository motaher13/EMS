<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Course;
use App\Models\Legal;
use App\Models\Post;
use App\Models\Privacy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainDashboardController extends Controller
{
    public function home()
    {
        return view('front.home');
        //return redirect()->route('dashboard.main');
    }

    public function dashboard()
    {
        $posts=Post::all();
        $courses=Course::all();
        $id=-1;
        return view('admin.dashboard.all-post')->with('posts',$posts)->with('courses',$courses)->with('id',$id);

    }


    public function selected($id)
    {


        $posts=Post::where('course_id',$id)->get();
//        return $posts;
        $courses=Course::all();
        return view('admin.dashboard.all-post')->with('posts',$posts)->with('courses',$courses)->with('id',$id);
    }
}
