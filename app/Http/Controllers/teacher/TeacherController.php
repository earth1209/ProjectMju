<?php

namespace App\Http\Controllers\teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recruits_news;
use App\Check_status;
use DB;

class TeacherController extends Controller
{
    public function index()
    {
        $recruits_news = Recruits_news::latest()->paginate(10);
        return view('dashboard', compact('recruits_news'));
        // return view('dashboard');
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stu_companies  $stu_companies
     * @return \Illuminate\Http\Response
     */
    public function show(Stu_companies $stu_companies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stu_companies  $stu_companies
     * @return \Illuminate\Http\Response
     */

    public function edit($stu_companies_id)
    {
        //
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stu_companies  $stu_companies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $stu_companies_id)
    {
//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stu_companies  $stu_companies
     * @return \Illuminate\Http\Response
     */
    public function destroy($stu_companies_id)
    {
        //
    }

}
