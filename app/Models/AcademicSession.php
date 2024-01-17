<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicSession extends Model
{
    use HasFactory;
    protected $fillable = ['start_date','end_date'];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'academic_session_courses');
    }
}
