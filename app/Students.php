<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = ['students_id','code','stu_name','gpa','contact','birthday','ct_status_id','diaries_id','diaries_id'];

    public function average_scores()
    {
        return $this->hasOne('App\Average_scores','average_scores_id');
    }

    public function stu_companies()
    {
        return $this->hasOne('App\Stu_companies','stu_companies_id');
    }
}
