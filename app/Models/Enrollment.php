<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $fillable = ['course_id','student_id','academic_session_id'];
    public function student(){
        return $this->belongsTo('App\Models\Student');
    }
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
    public function academicSession(){
        return $this->belongsTo('App\Models\AcademicSession');
    }
}
