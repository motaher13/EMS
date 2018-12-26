<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [
        'id'
    ];

    public function teacher(){
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function exam(){
        return $this->hasMany(Exam::class, 'course_id', 'id');
    }


}
