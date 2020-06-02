<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cache;
class Resume extends Model
{

    
    protected $table = 'students';
    
    public function resume_skills()
    {
        return $this->hasMany('App\Resume_skills','students_id','students_id');
    }
    
    

   
}
