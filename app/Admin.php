<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $filable = ['officer','student','teacher','company','admin'];
}
