<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable = ['company_name','address_id','company_gmail','website'];

    public function recruits_news()
    {
        return $this->hasMany('App\Recruits_news','company_id');
    }
}
