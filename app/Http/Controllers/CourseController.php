<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Services\CourseService;
use Illuminate\Http\Request;
use App\Models\TempFile;


class CourseController extends Controller
{
    private $courseService;
    private $courseMaterialService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService=$courseService;
    }





    public function create()
    {
        return view('course.create');
    }


    public function edit($id)
    {
        $course=Course::find($id);
        return view('course.edit')->with('course',$course);
    }




    public function store(CourseRequest $request)
    {
//        try{
            $course=$this->courseService->store($request);

            return redirect()->route('course.created');
//        }catch (\Exception $e){
//            return redirect()->back()->withInput()->with('error','something went wrong. Try again.');
//        }
    }



    public function update(Request $request,$id)
    {
        $data=$request->only(['title','course_code']);
        $course = Course::find($id);
        $course->update($data);

        return redirect()->route('course.created')->with('success','Course updated Successfully.');
    }




    public function showCreated()
    {
        $courses=Course::where('teacher_id','=',auth()->user()->id)
            ->get();

        return view('course.show_created')->with('courses',$courses)->with('user',auth()->user());
    }








    public function delete($id)
    {

        Course::destroy($id);
        return redirect()->route('course.created')->with('success','Course Deleted!');


    }







}
