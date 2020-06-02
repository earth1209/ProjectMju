<?php

namespace App\Http\Controllers\officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stu_companies;
use App\Students;
use App\Stu_option_statuses;
use App\check_internship_statuses;
use App\Contact_statuses;
use Session;

class StuCompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stu_company = Stu_companies::all();
        return view('officer.student_status', compact('stu_company'));
        // print_r($stu_company);
        // dd($stu_company);
        // return view('officer.student_status');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stu_status = Stu_companies::all();
        $internship_stt = check_internship_statuses::all();
        $stu_option_stt = Stu_option_statuses::all();
        $stu_contact_stt = Contact_statuses::all();
// dd($stu_option_stt);
        return view('officer.student_statuscreate', compact('stu_status','internship_stt','stu_option_stt','stu_contact_stt'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'students_id' => 'required',
            'internship_stt_id' => 'required',
            'ct_status_id' => 'required',
            'companies_id' => 'required',
            'stu_option_stt_id' => 'required',
            
        ]);

        $stu_companies = Stu_companies::create([
            'students_id' => $request->students_id,
            'internship_stt_id' => $request->internship_stt_id,
            'ct_status_id' => $request->ct_status_id,
            'companies_id' => $request->companies_id,
            'stu_option_stt_id' => $request->stu_option_stt_id
        ]);
   
        Session::flash('success', 'Successfully add the diaries!');

        return redirect()->route('stu_companies.create',$stu_companies->stu_companies_id);
        // echo $request;
        // print_r($request);

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
        $stu_status = Stu_companies::find($stu_companies_id);
        $internship_stt = check_internship_statuses::all();
        $stu_option = Stu_option_statuses::all();
        $contact_stt = contact_statuses::all();

        return view('officer.student_statusedit', compact('stu_status','internship_stt','stu_option','contact_stt'));
   }

    public function select()
    {
        return view('category')->with('list',Category::all());
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
         //Validate
         $request->validate([

            'internship_stt_id' => 'required',
            'ct_status_id' => 'required',
            'stu_option_stt_id' => 'required',

        ]);

        $stu_status = Stu_companies::find($stu_companies_id);

        
        $stu_status->internship_stt_id = $request->input('internship_stt_id');
        $stu_status->ct_status_id = $request->input('ct_status_id');
        $stu_status->stu_option_stt_id = $request->input('stu_option_stt_id');

        
        $stu_status->save();
        $request->session()->flash('success', 'Successfully!');
        return redirect()->route('stu_companies.edit',$stu_status->stu_companies_id);

       // dd($stu_status);

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
        $stu_companies = Stu_companies::find($stu_companies_id);

        $stu_companies->delete();

        Session::flash('success', 'Successfully!');

        return redirect()->back();
    }
}
