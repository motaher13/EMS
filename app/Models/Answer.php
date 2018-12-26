<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = [
        'id'
    ];

    public function exam(){
        return $this->belongsTo(Exam::class, 'exam_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function mcqA(){
        return $this->hasMany(McqA::class, 'answer_id', 'id');
    }

    public function writtenA(){
        return $this->hasMany(WrittenA::class, 'answer_id', 'id');
    }
}
