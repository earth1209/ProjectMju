<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume_skills extends Model
{
    protected $fillable = ['students_id','skill_id'];


    public function resume_skill()
    {
        return $this->hasOne('App\skills','skill_id','skill_id');
    }
}
