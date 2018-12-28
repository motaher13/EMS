<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class McqA extends Model
{
    protected $guarded = [
        'id'
    ];

    public function answer(){
        return $this->belongsTo(Answer::class, 'answer_id', 'id');
    }

    public function mcqq(){
        return $this->belongsTo(McqQ::class, 'mcqq_id', 'id');
    }
}
