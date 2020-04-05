<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check_status extends Model
{
    protected $fillable = ['student_id','check_status','student_options','stu_internship_location','contact_status'];
}
 