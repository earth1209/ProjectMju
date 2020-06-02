<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition_statuses extends Model
{
    protected $fillable = ['divisions_ct_id','division_name']; 

    public function companies()
    {
        return $this->hasOne('App\Recruits_news','company_id');
    }

}
