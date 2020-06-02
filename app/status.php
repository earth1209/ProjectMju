<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $fillable = ['status_name'];

    public function status(){
        // return $this->belongTo('App\Resume','status_id');
    }

}
