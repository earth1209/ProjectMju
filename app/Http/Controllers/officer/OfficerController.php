<?php

namespace App\Http\Controllers\officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Show_dashboard;
use App\Recruits_news;
use App\Recruits_skills;
use App\Companies;
use App\Skills;
// use App\Students;
use DB;


class OfficerController extends Controller
{

    public function index()
    {
        $recruits_news = Recruits_news::latest()->paginate(10);
        return view('dashboard', compact('recruits_news'));
        // return view('dashboard');
    }

    public function name_list_by_company()
    {
        return view('officer.name_list_by_company');
    }

    public function form_activity_hours()
    {
        return view('officer.form_activity_hours');
    }

    public function stu_activity_hours()
    {
        return view('officer.stu_activity_hours');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('officer.add_announce');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'company_name'    =>  'required',
            'gpa'     =>  'required',
            'student_number'    =>  'required',
            'skill'    =>  'required',
            'created_at'    =>  'required',
        ]);

        Recruits_news::create($request->all());
   
        // echo $request;
        return redirect()->route('officer.announce')
                        ->with('success','Product created successfully.');

    }

    public function store_account(Request $request)
    {
        $this->validate($request, [
            'company_name'    =>  'required',
            'address'     =>  'required',
            'number'    =>  'required',
            'skill'    =>  'required',
            'date'    =>  'required',
        ]);

        Show_dashboard::create($request->all());
   
        // echo $request;
        return redirect()->route('officer.account')
                        ->with('success','Product created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Show_announce $show_announce)
    {
        return view('officer.announce',compact('show_announce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
