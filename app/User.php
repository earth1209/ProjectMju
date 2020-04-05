<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const ADMIN_TYPE = 1;
    const OFFICER_TYPE = 2;
    const STUDENT_TYPE = 3;
    const TEACHER_TYPE = 4;
    const COMPANY_TYPE = 5;
    const DEFAULT_TYPE = 0;
    
    public function isAdmin()
    {
        return $this->type === self::ADMIN_TYPE;
    }
    public function isOfficer()
    {
        return $this->type === self::OFFICER_TYPE ;
    }
    public function isStudent()
    {
        return $this->type === self::STUDENT_TYPE ;
    }
    public function isTeacher()
    {
        return $this->type === self::TEACHER_TYPE ;
    }
    public function isCompany()
    {
        return $this->type === self::COMPANY_TYPE ;
    }
}
