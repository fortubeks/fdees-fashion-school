<?php

use App\Models\Course;
use Illuminate\Support\Facades\DB;

function getModelList($model){
    $model_list = null;

    if($model == 'courses'){
        $model_list = Course::all();
    }
    if($model == 'states'){
        $model_list = DB::table('states')->where('country_id','=',161)->get();
    }
    
    return $model_list;
}