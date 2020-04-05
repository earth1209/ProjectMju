<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show_dashboard extends Model
{
    protected $fillable = ['company_name', 'address', 'number', 'skill', 'date'];
    
}
