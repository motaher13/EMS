<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function create()
    {

        $courses=Course::where('teacher_id',auth()->user()->id)->get();
        return view('exam.create')->with('courses',$courses);
    }

    public function store(Request $request)
    {
        $data=$request->only(['title','course_id','start','end']);
        $exam = Exam::create($data);
        return redirect()->route('dashboard.main');
    }

    public function showCreated()
    {
        $courses=Course::where('teacher_id','=',auth()->user()->id)
            ->pluck('id');
        $exams=Exam::whereIn('course_id',$courses)->get();
        return view('exam.show_created')->with('exams',$exams);
    }

    public function delete($id)
    {

    }
}
