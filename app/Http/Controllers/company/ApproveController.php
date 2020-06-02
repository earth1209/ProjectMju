<?php

namespace App\Http\Controllers\company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Diaries;
use App\Students;
use App\Companies;
use App\Stu_companies;

class ApproveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $value1 = $request->get('year1');
       
        if ($value1) {
            $diaries= Stu_companies::where('created_at','like','%'.$value1.'%')->get();;
                       
        }else {
            $diaries = Stu_companies::orderBy('created_at','desc')->paginate(10);
                       
        }
        
        return view('company.diaries',compact('diaries'));
        // dd($diaries);
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
    public function store($id)
    {
        // return 'Yeh!!';
        // $approved = Diaries::where('approve', '=', e($id))->first();
        // if($approved)
        // {
        //     $approved->approve = 1;
        //     $approved->save();
        //     return redirect('company.diariesdisplay');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
 
        $stu = Stu_companies::where("stu_companies_id", "=", $id)->first();
         
        return view('company.diariesdisplay',compact("stu"));
        // var_dump($stu->students->stu_name);
        // dd($stu[0]->diaries);//ในวิวต้องวนลูปก่อนถึงจะได้ไดอารี่หลายไดอารี่
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
    // public function approved()
    // {   
    //     $unapproved = Diaries::where('approved',0)->update(['approved' => 1]);
    //     return redirect()->back();
    //     // $stu = Stu_companies::students()->stu_companies_id;
    //     // $diaries = Diaries::latest()->where('stu_companies_id', $stu)->where('approved',0)->get();
    //     // return view('company.createComment', compact('diaries'));
    // }
}
