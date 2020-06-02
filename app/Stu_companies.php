<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stu_companies extends Model
{
    protected $fillable = ['stu_companies_id','students_id','companies_id','ct_status_id',
                            'intern_stt_id','academic_year','term','choice_stu','stu_option_stt_id',
                            'internship_stt_id','subject_stt_id','cond_stt_id','coop_check_stt_id'];
        
     protected $primaryKey = 'stu_companies_id';

    
    public function students()
    {
        return $this->hasOne('App\Students','students_id','stu_companies_id');
    }

    public function intern_statuses()
    {
        return $this->hasOne('App\Intern_statuses','intern_stt_id','stu_companies_id');
    }

    public function contact_statuses()
    {
        return $this->hasOne('App\Contact_statuses','ct_status_id','ct_status_id');
        // return $this->belongsTo('App\Contact_statuses');
    }

    public function companies()
    {
        return $this->hasMany('App\Companies','companies_id','companies_id');
    }

    public function check_internship_statuses()
    {
        return $this->hasOne('App\Check_internship_statuses','internship_stt_id','internship_stt_id');
    }

    public function stu_option_statuses()
    {
        return $this->hasOne('App\Stu_option_statuses','stu_option_stt_id','stu_option_stt_id');
    }
}
