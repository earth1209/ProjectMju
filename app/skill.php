<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    protected $fillable = ['skill_name'];

    public function recruits_skills()
    {
        return $this->hasOne('App\Recruits_skills');
    }
}
