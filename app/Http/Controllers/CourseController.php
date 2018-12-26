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




    public function store(CourseRequest $request)
    {
        try{
            $course=$this->courseService->store($request);

            return redirect()->route('dashboard.main');
        }catch (\Exception $e){
            return redirect()->back()->withInput()->with('error','something went wrong. Try again.');
        }
    }




    public function showCreated()
    {
        $courses=Course::where('teacher_id','=',auth()->user()->id)
            ->get();

        return view('course.show_created')->with('courses',$courses)->with('user',auth()->user());
    }








    public function delete($id)
    {

        $status=$this->courseService->delete($id);
        if($status){
            return redirect()->route('course.basic')->with('success','Deletion Success');
        }else{

            return redirect()->back()->with('error','Something went wrong. Try again.');
        }

    }







}
