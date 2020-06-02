<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisions_contacts extends Model
{
    protected $fillable = ['division_name'];
    protected $primaryKey = 'divisions_ct_id';
 
    public function companies()
    {
        return $this->hasOne('App\Companies','companies_id');
    }
}
