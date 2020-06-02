<?php

namespace App\Http\Controllers\teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stu_companies;

class Stu_sttController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stu_company = Stu_companies::all();
        return view('teacher.student_status', compact('stu_company'));
        // return view('stu_status');
    }
}
