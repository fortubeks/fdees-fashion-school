<?php

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

function getModelList($model){
    $model_list = null;

    if($model == 'courses'){
        $model_list = Course::where('name','<>','Intermediate')->get();
    }
    if($model == 'enrollments'){
        $model_list = Enrollment::all();
    }
    if($model == 'students'){
        $model_list = Student::all();
    }
    if($model == 'states'){
        $model_list = DB::table('states')->where('country_id','=',161)->get();
    }
    
    return $model_list;
}
function getModelCount($model){
    $count = 0;

    if($model == 'courses'){
        $count = Student::count();
    }
    if($model == 'students'){
        $count = Student::count();
    }
    if($model == 'enrollments'){
        $count = Enrollment::count();
    }
    return $count;
}