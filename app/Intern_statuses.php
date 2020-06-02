<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intern_statuses extends Model
{
    protected $fillable = ['intern_stt__id','intern_name'];

    public function stu_companies()
    {
        return $this->hasOne('App\Stu_companies','stu_companies_id');
    }
}
