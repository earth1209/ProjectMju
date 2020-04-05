<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recruits_news;

class StudentController extends Controller
{
    public function index()
    {
        $recruits_news = Recruits_news::latest()->paginate(10);
        return view('dashboard', compact('recruits_news'));
        // return view('dashboard');
    }

    public function show_regulation()
    {
        return view('student.regulation');
    }

    public function compa_information()
    {
        return view('student.company_information');
    }

    public function show_diaries()
    {
        return view('student.diaries');
    }

    public function show_write_diary()
    {
        return view('student.write_diary');
    }
}
