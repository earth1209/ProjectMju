<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admindb;
use Session;

class AdmindbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view("users.tablerightsmanagement");
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
        $this->validate($request,[
            'v_admissions_companies' => 'required|numeric',
            'v_student_information' => 'required|numeric',
            'v_student_journals' => 'required|numeric',
            'v_student_scores' => 'required|numeric',
            'v_student_GPA' => 'required|numeric',
            'v_preparation_hours'=> 'required|numeric',
            'contact_students' => 'required|numeric',
            'choose_place_students' => 'required|numeric',
            'v_student_internships' => 'required|numeric',
            'send_nformation_companies' => 'required|numeric',
            'document_startdate_internship' => 'required|numeric',
            'check_diaries_comments' => 'required|numeric',
            'add_delete_edit' => 'required|numeric',
            'staff_registration' => 'required|numeric',
            'manage_documentation' => 'required|numeric',
            'v_location_internshippast' => 'required|numeric',
            'a_new_internshiplo' => 'required|numeric',
            'c_record' => 'required|numeric',
            's_GPAhours_passornot' => 'required|numeric',
            'c_internship' => 'required|numeric',
            'v_information_select' => 'required|numeric',
            'assess_students' => 'required|numeric',
            'contact_staff' => 'required|numeric'
        ]);

        $admindb = new Admindb;
        $admindb->v_admissions_companies = $request->v_admissions_companies;
        $admindb->v_student_information = $request->v_student_information;
        $admindb->v_student_journals = $request->v_student_journals;
        $admindb->v_student_scores = $request->v_student_scores;
        $admindb->v_student_GPA = $request->v_student_GPA;
        $admindb->v_preparation_hours = $request->v_preparation_hours;
        $admindb->contact_students = $request->contact_students;
        $admindb->choose_place_students = $request->choose_place_students;
        $admindb->v_student_internships = $request->v_student_internships;
        $admindb->send_nformation_companies = $request->send_nformation_companies;
        $admindb->document_startdate_internship = $request->document_startdate_internship;
        $admindb->check_diaries_comments = $request->check_diaries_comments;
        $admindb->add_delete_edit = $request->add_delete_edit;
        $admindb->staff_registration = $request->staff_registration;
        $admindb->manage_documentation = $request->manage_documentation;
        $admindb->v_location_internshippast = $request->v_location_internshippast;
        $admindb->a_new_internshiplo = $request->a_new_internshiplo;
        $admindb->c_record = $request->c_record;
        $admindb->s_GPAhours_passornot = $request->s_GPAhours_passornot;
        $admindb->c_internship = $request->c_internship;
        $admindb->v_information_select = $request->v_information_select;
        $admindb->assess_students = $request->assess_students;
        $admindb->contact_staff = $request->contact_staff;

        $admindb->save();

        return redirect('admindb');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
