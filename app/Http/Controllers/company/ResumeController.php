<?php

namespace App\Http\Controllers\Company;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Skill;


class ResumeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return "under";
    

        // $resumes = resume::all();
        // return view('pages.company.index', compact('resumes',$resumes));
    }
    public function resume(Request $request)
    {   
        $value = $request->get('year');
        $resumes = DB::table('resumes')
            ->join('skills', 'skills.skill_id', '=', 'resumes.skill_id')
            ->select('resumes.resume_id','resumes.resume_name','resumes.resume_lname','resumes.resume_grade','skills.skill_name','resumes.resume_contact','resumes.created_at' )
            ->where('created_at','like', '%'.$value.'%')
            ->orderBy('resume_grade', 'desc')
            ->get();
            return view('company.resume', ['resumes' => $resumes]);

        // $users = DB::table('resumes')->paginate(4);//pagination 
        // $users = DB::table('resumes')->get();//แสดงข้อมูลทั้งหมดในหน้าเดียว
        // $resumes = DB::table('resumes')->get();
        // return view('pages.company.resume', ['resumes' => $resumes]);
        
        // print_r($resumes);

            // return view('pages.company.resume', compact('resumes'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.createresume');
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
            'skill_name'    =>  'required'
        ]);

        Skill::create($request->all());
   
        // echo $request;
        return redirect()->route('officer.announce')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show(resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(resume $resume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resume $resume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(resume $resume)
    {
        //
    }

    

    
    
    

}
