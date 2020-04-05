<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superadmins extends Model
{
    //
    protected $fillable = ['name_ac', 'officer', 'student', 'teacher', 'company', 'admin'];
    protected $primaryKey = 'id';
}
