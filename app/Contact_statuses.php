<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_statuses extends Model
{
    protected $fillable = ['ct_status_id','contact_name'];

    public function stu_companies()
    {
        return $this->hasOne('App\Stu_companies','stu_companies_id');
        // return $this->hasOne('App\Stu_companies');
    }
}
