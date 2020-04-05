<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    protected function redirectTo()
    {
        if(auth()->user()->isAdmin()) {
            return '/admin/dashboard';
        } else if(auth()->user()->isOfficer()) {
            return '/officer/dashboard';
        } else if(auth()->user()->isStudent()) {
            return '/student/dashboard';
        } else if(auth()->user()->isTeacher()) {
            return '/teacher/dashboard';
        } else if(auth()->user()->isCompany()) {
            return '/company/dashboard';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
}
