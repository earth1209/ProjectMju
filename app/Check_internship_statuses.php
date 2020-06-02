<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check_internship_statuses extends Model
{
    protected $fillable = ['internship_stt_id','internship_stt_name'];
    protected $table= 'check_internship_statuses';

    public function stu_companies()
    {
        return $this->hasOne('App\Stu_companies','stu_companies_id');
    }

}
