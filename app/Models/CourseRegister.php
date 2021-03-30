<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class CourseRegister extends Model
{
    public function course(){
        return $this->belongsTo(Course::class,'course_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
