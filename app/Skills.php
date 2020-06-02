<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $fillable = ['skill_id','skill_name'];

    public function recruits_skills()
    {
        return $this->hasOne('App\Recruits_skills');
    }

    public function resume_skill()
    {
        return $this->hasOne('App\skill','skill_id','skill_id');
    }
}
