<?php

namespace App\Http\Controllers\officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Show_dashboard;
use App\Recruits_news;
use App\Recruits_skills;
use App\Companies;
use App\skill;
use App\Check_status;
use DB;

class OfficerController extends Controller
{

    public function index()
    {
        $recruits_news = Recruits_news::latest()->paginate(10);
        return view('dashboard', compact('recruits_news'));
        // return view('dashboard');
    }

    public function announce_news()
    {
        $recruits_news =  Recruits_news::orderBy('created_at','desc')->paginate(10);
                                            // table('recruits_skills')
                                            // ->join('recruits_skills','recruits_news_id','=','recruits_skills.recruits_news_id')
                                            // ->join('skills','skill_id','=','skills.skill_id')
                                            // ->select('recruits_news_id','skill_name')
                                        // where('recruits_news_id',1)
                                        // ->get();

        // print_r($recruits_news->toJson());
        // return $recruits_news[0]->recruits_skills->all();

  
        return view('officer.announce',compact('recruits_news'));
        // return view('officer.announce');
    }

    public function add_news()
    {
        $skill = DB::table('skills')->get();
  
        return view('officer.add_announce',compact('skill'));   
        // return view('officer.add_announce');
    }

    public function account()
    {
        return view('officer.account');
    }

    public function add_account()
    {
        return view('officer.add_account');
    }

    public function name_list_by_company()
    {
        return view('officer.name_list_by_company');
    }

    public function internship_document()
    {
        return view('officer.internship_document');
    }

    public function form_status()
    {
        $stu_status = DB::table('students')->get();
        return view('officer.form_status', compact('stu_status'));
    }
    
    public function form_activity_hours()
    {
        return view('officer.form_activity_hours');
        
    }

    public function student_status()
    {
        $check_status = DB::table('check_status')->get();
        return view('officer.student_status', compact('check_status'));
        // return view('officer.student_status');
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
            'address'     =>  'required',
            'number'    =>  'required',
            'skill'    =>  'required',
            'date'    =>  'required',
        ]);

        Show_dashboard::create($request->all());
   
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

    public function store_status(Request $request)
    {
        $this->validate($request, [
            'student_id' => 'required',
            'check_status' => 'required',
            'student_options' => 'required',
            'stu_internship_location' => 'required',
            'contact_status' => 'required',
            
        ]);

        Check_status::create($request->all());
   
        // echo $request;
        print_r($request);
        // return redirect()->route('officer.account')
        //                 ->with('success','Product created successfully.');

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
