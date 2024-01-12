<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'first_name', 'middle_name', 'last_name', 'state', 'nationality', 'gender', 
    'marital_status', 'religion', 'occupation', 'home_address', 'office_address', 'highest_qualification', 
    'programme_registered', 'intended_date', 'sponsor_name', 'sponsor_phone', ];

    public function user(){
        return $this->belongsTo('App/Model/User');
    }
    public function enrollments(){
        return $this->hasMany('App/Model/Enrollment');
    }
    public function guarantor(){
        return $this->hasOne('App/Model/Guarantor');
    }
    public function payments(){
        return $this->hasMany('App/Model/Payment');
    }
}
