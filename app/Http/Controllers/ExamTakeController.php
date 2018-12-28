<?php

namespace App\Http\Controllers;

use App\Models\Answer;
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
        $exams=Exam::where('start','>=',date("Y-m-d H:i:s"))->get();
        return view('exam_take.list')->with('exams',$exams);
    }

    public function take($id)
    {
        $mcqqs=McqQ::where('exam_id',$id)->get();
        $writtenqs=WrittenQ::where('exam_id',$id)->get();
        $exam=Exam::find($id);
        return view('exam_take.take')->with('mcqqs',$mcqqs)->with('writtenqs',$writtenqs)->with('exam',$exam);
    }

    public function storeAnswer($id,Request $request)
    {
//        return $request;
        $data=$request->except('_token');
        $keys=array_keys($data);
//        return $data;
        $dt['exam_id']=$id;
        $dt['student_id']=auth()->user()->id;
        $answer=Answer::create($dt);

        for($i=1;$i<sizeof($keys);$i++)
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
}
