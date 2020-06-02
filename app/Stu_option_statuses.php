<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stu_option_statuses extends Model
{
    protected $fillable = ['stu_option_stt_id','stu_option_stt_name'];

    public function stu_companies()
    {
        return $this->hasOne('App\Stu_companies','stu_companies_id');
    }
}
