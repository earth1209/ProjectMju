<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diaries extends Model
{
    
    // Setup fields of table "diaries"
    protected $fillable = ['id','start_time','break_time','description','students_id','stu_companies_id'];

     public function stu_company(){
         return $this->hasOne('App\Stu_companies','stu_companies_id');
     }
    

// public function user()
// {
//     return $this->hasOne('App\User', 'foreign_key', 'local_key');
// }

}
