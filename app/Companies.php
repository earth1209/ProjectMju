<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    // public $timestamps = false;
   
 

    protected $fillable = ['companies_name','address','website','location_id',
                            'divisions_ct_id','users_id','email'];

    protected $primaryKey = 'companies_id';
    // public $timestamps = false;



    public function recruits_news()
    {
        return $this->hasOne('App\Recruits_news','company_id');
    }

    public function stu_companies()
    {
        return $this->hasOne('App\Stu_companies','companies_id');
    }

    public function division_contact()
    {
        return $this->hasOne('App\Divisions_contacts','divisions_ct_id','divisions_ct_id');
    }
}
