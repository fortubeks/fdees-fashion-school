<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['name','cost','capacity'];
    public function availableSessions(){
        //get all sessions that this course has been added to as long as the start date is greater than today
    }
    public function academicSessions()
    {
        return $this->belongsToMany(AcademicSession::class, 'academic_session_courses');
    }
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
