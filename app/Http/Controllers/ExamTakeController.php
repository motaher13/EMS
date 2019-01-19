<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Course;
use App\Models\Exam;
use App\Models\McqA;
use App\Models\McqQ;
use App\Models\WrittenA;
use App\Models\WrittenQ;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ExamTakeController extends Controller
{
    public function list()
    {
        $answers=Answer::where('student_id',auth()->user()->id)->pluck('exam_id');
        $runningexams=Exam::where('end','>=',date("Y-m-d H:i:s"))
                        ->where('start','<=',date("Y-m-d H:i:s"))
                        ->whereNotIn('id',$answers)
                        ->orderby('start')
                        ->get();
        $upcomingexams=Exam::where('start','>',date("Y-m-d H:i:s"))
                        ->orderby('start')
                        ->whereNotIn('id',$answers)->get();

        return view('exam_take.list')->with('runningexams',$runningexams)->with('upcomingexams',$upcomingexams);
    }








    public function take($id)
    {
        $mcqqs=McqQ::where('exam_id',$id)->get();
        $writtenqs=WrittenQ::where('exam_id',$id)->get();
        $exam=Exam::find($id);
        $start=\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$exam->start);
        $end= \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$exam->end);
        $duration=$start->diffInMinutes($end);
        $current=\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',date("Y-m-d H:i:s"));
        $left=$current->diffInMinutes($end);

        return view('exam_take.take')->with('mcqqs',$mcqqs)->with('writtenqs',$writtenqs)->with('exam',$exam)->with('duration',$duration*60)->with('left',$left*60);
    }








    public function storeAnswer($id,Request $request)
    {
//        return $request;
        $data=$request->except('_token');
        $keys=array_keys($data);
//        return sizeof($keys);
        $dt['exam_id']=$id;
        $dt['student_id']=auth()->user()->id;
        $answer=Answer::create($dt);

        for($i=0;$i<sizeof($keys);$i++)
        {
            $str=$keys[$i];
            if($str[0]=='m')
            {
                $j=(int)substr($str,1);
                $dat['answer_id']=$answer->id;
                $dat['mcqq_id']= $j;
                $dat['answer']=$data[$str];
                $mcqa=McqA::create($dat);
            }
            else
            {
                $j=(int)substr($str,1);
                $dta['answer_id']=$answer->id;
                $dta['writtenq_id']= $j;
                $dta['answer']=$data[$str];
                $mcqa=WrittenA::create($dta);
            }
        }
        return redirect()->route('exam.list');
    }










    public function examHeld()
    {
        $exams=Exam::where('teacher_id',auth()->user()->id)->where('end','<',date("Y-m-d H:i:s"))->orderby('end','DESC')->get();
        return view('exam_take.held-exam')->with('exams',$exams);
    }












    public function showSheetList($id)
    {
        $answers=Answer::where('exam_id',$id)->where('marks',-1)->get();
        return view('exam_take.sheet-list')->with('answers',$answers);
    }












    public function showSheet($id)
    {
        $answer=Answer::find($id);
        $mcqas=McqA::where('answer_id',$id)->get();
        $writtenas=WrittenA::where('answer_id',$id)->get();
        return view('exam_take.sheet')->with('mcqas',$mcqas)->with('writtenas',$writtenas)->with('answer',$answer);
    }











    public function examine($id,Request $request)
    {
        $data=$request->except('_token');
        $keys=array_keys($data);
        $sum=0;

        for($i=0;$i<sizeof($keys);$i++)
        {
            $str=$keys[$i];
            $j=(int)$str;
            $writtena=WrittenA::find($j);
            $writtena->marks=$data[$str];
            $sum+=$data[$str];
            $writtena->save();

        }
        $mcqas=McqA::where('answer_id',$id)->get();
        foreach ($mcqas as $mcqa)
        {
            if($mcqa->answer==$mcqa->mcqq->answer)
                $sum+=$mcqa->mcqq->marks;
        }
        $answer=Answer::find($id);
        $answer->marks=$sum;
        $answer->save();
        $exam=$answer->exam;
        $answers=Answer::where('exam_id',$answer->exam_id)->get();
        $b=0;
        foreach ($answers as $answer)
        {
            if($answer->marks==-1)
            {
                $b=1;
                break;
            }
        }
        if($b==0)
        {
            $exam->examined=1;
            $exam->save();
        }

        return redirect()->route('exam.sheetList',$id);

    }











    public function resultPersonal()
    {
        $answers=Answer::where('student_id',auth()->user()->id)->whereNotNull('marks')->get();
        return view('result.personal')->with('answers',$answers);
    }




    public function resultExamined()
    {
        $exams=Exam::where('examined',1)->orderby('updated_at','DESC')->get();
        return view('result.examined')->with('exams',$exams);
    }




    public function resultBatch($id)
    {
        $answers=Answer::where('exam_id',$id)->orderby('marks','DESC')->get();
        return view('result.batch')->with('answers',$answers);
    }

}
