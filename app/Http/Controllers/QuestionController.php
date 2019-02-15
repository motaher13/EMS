<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Exam;
use App\Models\McqQ;
use App\Models\WrittenQ;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function courseList()
    {
        $courses=Course::distinct('course_code')->get();

        return view('question.course')->with('courses',$courses);
    }

    public function list($course_code)
    {
        $courses=Course::where('course_code',$course_code)->pluck('id');
        $exams=Exam::whereIn('course_id',$courses)
                ->where('end','<',date("Y-m-d H:i:s"))
                ->get();
        return view('question.list')->with('exams',$exams);
    }

    public function show($id)
    {
        $mcqqs=McqQ::where('exam_id',$id)->get();
        $writtenqs=WrittenQ::where('exam_id',$id)->get();
        $exam=Exam::find($id);
        return view('question.show')->with('mcqqs',$mcqqs)->with('writtenqs',$writtenqs)->with('exam',$exam);
    }
}
