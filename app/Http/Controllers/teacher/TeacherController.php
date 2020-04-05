<?php

namespace App\Http\Controllers\teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recruits_news;
use DB;

class TeacherController extends Controller
{
    public function index()
    {
        $recruits_news = Recruits_news::latest()->paginate(10);
        return view('dashboard', compact('recruits_news'));
        // return view('dashboard');
    }
}
