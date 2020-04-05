<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruits_skills extends Model
{
    protected $fillable = ['recruits_news_id', 'skill_id'];

    public function recruits_skill()
    {
        return $this->hasOne('App\skill','skill_id','skill_id');
    }

    // public function skill()
    // {
    //     return $this->belongsTo('App\skill','skill_id');
    // }

    
}
