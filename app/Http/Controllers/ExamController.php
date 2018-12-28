<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Exam;
use App\Models\McqQ;
use App\Models\User;
use App\Models\WrittenQ;
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
        $data['teacher_id']=auth()->user()->id;
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

    public function show($id)
    {

        $mcqqs=McqQ::where('exam_id',$id)->get();
        $writtenqs=WrittenQ::where('exam_id',$id)->get();
        $exam=Exam::find($id);
        return view('exam.show')->with('mcqqs',$mcqqs)->with('writtenqs',$writtenqs)->with('exam',$exam);
    }

    public function edit($id)
    {

        $courses=Course::where('teacher_id',auth()->user()->id)->get();
        $exam=Exam::find($id);
        return view('exam.edit')->with('courses',$courses)->with('exam',$exam);
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


    public function editMcqQ($id)
    {
        $mcqq=McqQ::find($id);
        return view('exam.edit_mcqq')->with('mcqq',$mcqq);
    }

    public function updateMcqQ($id,Request $request)
    {
        $data=$request->only(['question','option_a','option_b','option_c','option_d','answer','marks']);
        $mcqq=McqQ::find($id);
        $exam_id=$mcqq->exam_id;
        $mcqq=$mcqq->update($data);
        return redirect()->route('exam.show',$exam_id)->with('success','Question Updated Successfully.');
    }


    public function deleteMcqQ($id)
    {
        $mcqq=McqQ::find($id);
        $exam=$mcqq->exam;
        $mcqq->delete();
        return redirect()->route('exam.show',$exam->id);
    }













    public function addWrittenQ($id)
    {
        return view('exam.add_writtenq')->with('exam_id',$id);
    }

    public function storeWrittenQ($id,Request $request)
    {
        $data=$request->only(['question','marks']);
        $data['exam_id']=$id;
        $writtenq = WrittenQ::create($data);

        if($request->hasFile('picture'))
        {
            $picture=$request->file('picture');
            $input= $picture->getClientOriginalName();
            $destinationPath = public_path('/uploads');
            $picture->move($destinationPath, $input);
            $writtenq->picture='uploads/'.$input;
            $writtenq->save();
        }

        return redirect()->route('exam.add-writtenq',$id)->with('success','Question Added Successfully.');
    }

    public function editWrittenQ($id)
    {
        $writtenq=writtenQ::find($id);
        return view('exam.edit_writtenq')->with('writtenq',$writtenq);
    }


    public function updateWrittenQ($id,Request $request)
    {
        $data=$request->only(['question','marks']);
        $writtenq = WrittenQ::find($id);
        $writtenq->update($data);

        if($request->hasFile('picture'))
        {
            $picture=$request->file('picture');
            $input= $picture->getClientOriginalName();
            $destinationPath = public_path('/uploads');
            $picture->move($destinationPath, $input);
            $writtenq->picture='uploads/'.$input;
            $writtenq->save();
        }
        return redirect()->route('exam.show',$writtenq->exam_id)->with('success','Question updated Successfully.');
    }



    public function deleteWrittenQ($id)
    {
        $writtenq=WrittenQ::find($id);
        $exam=$writtenq->exam;
        $writtenq->delete();
        return redirect()->route('exam.show',$exam->id);
    }



    public function test()
    {
        $user=McqQ::find(3);
        return $user->exam;
    }









}
