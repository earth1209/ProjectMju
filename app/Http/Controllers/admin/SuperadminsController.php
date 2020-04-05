<?php

namespace App\Http\Controllers\admin;

use App\Superadmins;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;




class SuperadminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $superadmins = Superadmins::all();
        return view('superadmins.aa',compact('superadmins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('superadmins.aa');

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
        return ('Hello');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Superadmins  $superadmins
     * @return \Illuminate\Http\Response
     */
    public function show(Superadmins $superadmins)
    {
        //
        $superadmins = Superadmins::find($id);

        return view('superadmins.aa',compact('superadmins'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Superadmins  $superadmins
     * @return \Illuminate\Http\Response
     */
    public function edit(Superadmins $superadmins)
    {
        //
        return 'Hello';
        $superadmins = Superadmins::find($id);

        return view('superadmins.aa',compact('superadmins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Superadmins  $superadmins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $request->validate([
            'officer' => 'required',
            'student' => 'required',
            'teacher' => 'required',
            'company' => 'required',
            'admin' => 'required'
        ]);
        // return 1/0;
        // die();

        $superadmins = array(
           'officer' => $request->officer,
           'student' => $request->student,
           'teacher' => $request->teacher,
           'company' => $request->company,
           'admin' => $request->admin,
        );
        


        Superadmins::whereId($id)->update($superadmins);

        // $superadmins = Superadmins::all();
        // return view('superadmins.aa',compact('superadmins'));


    

        return redirect()->route('superadmins.index')->with('success', 'Successfully updated.');
        //return ('hello');
        
        
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Superadmins  $superadmins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Superadmins $superadmins)
    {
        //
        $superadmins = Superadmins::findOrfail($id);
        $superadmins->delete();

        return redirect()->route('/home')->with('success', 'Students deletd successful.');
    }
}
