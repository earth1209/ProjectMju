<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Averages extends Model

{
    protected $primaryKey = 'average_id';

    protected $fillable = ['average_id','stu_companies_id'.'score','details'];

    public function stu_companies()
    {
        return $this->hasOne('App\stu_companies','stu_companies_id','stu_companies_id');
    }
}
