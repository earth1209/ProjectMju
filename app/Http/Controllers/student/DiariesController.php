<?php

namespace App\Http\Controllers\student;

use App\Diaries;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use App\Show_dashboard;

class DiariesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $diaries = Diaries::all();
        // return view('student.diaries',compact('diaries',$diaries));
        return view('student.diaries')->withdiaries($diaries);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.diariescreate');

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
        //Validate
        $request->validate([
            'start_time' => 'required',
            'break_time' => 'required',
            'description' => 'required',   
        ]);
        
        $diaries = Diaries::create([
            'start_time' => $request->start_time,
            'break_time' => $request->break_time,
            'description' => $request->description
        ]);

        Session::flash('success', 'Successfully add the diaries!');

        // return redirect('diariesa'.$diaries->id);
        return redirect()->route('diariesa.create',$diaries->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diaries  $diaries
     * @return \Illuminate\Http\Response
     */
    // public function show(Diaries $diaries)
    // {
    //     //

     
    //     return view('student.diariesshow',compact('diaries',$diaries));
       


    // }


     public function show($id)
    {
        //
        $diaries = Diaries::find($id);
     
        return view('student.diariesshow')->withdiaries($diaries);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diaries  $diaries
     * @return \Illuminate\Http\Response
     */
    // public function edit(Diaries $diaries)
    // {
    //     // $diaries = Diaries::find();
    //     return view('student.diariesedit',compact('diaries',$diaries));
    // }

    public function edit($id)
    {
        $diaries = Diaries::find($id);

        return view('student.diariesedit')->withdiaries($diaries);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diaries  $diaries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        //Validate
        $request->validate([

            'start_time' => 'required',
            'break_time' => 'required',
            'description' => 'required',
        ]);

        $diaries = Diaries::find($id);
        
        $diaries->start_time = $request->input('start_time');
        $diaries->break_time = $request->input('break_time');
        $diaries->description = $request->input('description');
        
        $diaries->save();
        $request->session()->flash('success', 'Successfully modified the diaries!');
        return redirect()->route('diariesa.show',$diaries->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diaries  $diaries
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diaries = Diaries::find($id);

        $diaries->delete();

        Session::flash('success', 'Successfully delete the diaries!');

        return redirect()->back();
    }
}
