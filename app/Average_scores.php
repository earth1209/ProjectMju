<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Average_scores extends Model
{
    protected $fillable = ['average_scores_id','students_id'];

    public function students()
    {
        return $this->hasOne('App\Students','students_id','average_scores_id');
    }
}
