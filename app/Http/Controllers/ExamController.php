<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Exam;
use App\Models\McqQ;
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

    public function addMcqQ($id)
    {
        return view('exam.add_mcqq')->with('exam_id',$id);
    }

    public function storeMcqQ($id,Request $request)
    {
        $data=$request->only(['question','option_a','option_b','option_c','option_d','answer','marks']);
        $data['exam_id']=$id;
        $mcqq = McqQ::create($data);
        return redirect()->route('exam.add-mcqq',$id)->with('success','Question Added Successfully.');
    }

    public function addWrittenQ($id)
    {
        return view('exam.add_writtenq')->with('exam_id',$id);
    }

    public function storeWrittenQ($id)
    {
        return view('exam.add_writtenq');
    }
}
