<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruits_news extends Model
{
    protected $fillable = ['company_id','gpa','student_number','created_at','company_name','skill_name'];

    public function companies()
    {
        return $this->hasMany('App\Companies','id','company_id');
    }

    public function recruits_skills()
    {
        return $this->hasMany('App\Recruits_skills','recruits_news_id','recruits_news_id');
    }
}
