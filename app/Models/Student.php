<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{
    use HasFactory, Notifiable, SoftDeletes;
    protected $fillable = ['first_name', 'email', 'last_name', 'state', 'nationality', 'gender', 
    'marital_status','date_of_birth', 'religion', 'occupation', 'home_address', 'office_address', 'highest_qualification','sponsor', 'phone', ];

    public function enrollments(){
        return $this->hasMany('App\Models\Enrollment');
    }
    public function guarantor(){
        return $this->hasOne('App\Models\Guarantor');
    }
    public function payments(){
        return $this->hasMany('App\Models\StudentPayment');
    }
    public function name(){
        return $this->first_name. ' '. $this->last_name;
    }
}
