<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded = [
        'id'
    ];

    public function course(){
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function teacher(){
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function Answer(){
        return $this->hasMany(Answer::class, 'exam_id', 'id');
    }

    public function mcqQ(){
        return $this->hasMany(McqQ::class, 'exam_id', 'id');
    }

    public function writtenQ(){
        return $this->hasMany(WrittenQ::class, 'exam_id', 'id');
    }
}
