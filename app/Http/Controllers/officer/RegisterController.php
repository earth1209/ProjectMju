<?php

namespace App\Http\Controllers\officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Companies;
use App\Divisions_contacts;
use Session;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = Companies::all();
        $dv_ct = Divisions_contacts::all();
        // dd($register->divisions_contact->division_name);
        
        // print_r($register->divisions_contact->division_name);
        return view('officer.account', compact('register','dv_ct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $register = Divisions_contacts::all();
        // dd($register);
        return view('officer.accountcreate', compact('register'));
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
            'companies_name' => 'required',
             'email' => 'required',
            'address' => 'required',  
            'website' => 'required',
            'divisions_ct_id' => 'required',
        ]);
        
        $register = Companies::create([
            'companies_name' => $request->companies_name,
            'email' => $request->email,
            'address' => $request->address,
            'website' => $request->website,
            'divisions_ct_id' => $request->divisions_ct_id,
            'location_id' => $request->location_id,
            'users_id' => $request ->users_id,
            'email' => $request->email
        ]);

        Session::flash('success', 'Successfully add the averages!');
        // return redirect()->route('register.create',$register->companies_id);
        // dd($register);

        // print_r($request);
        // var_dump($register);
        // dd($request);
        // Session::flash('success', 'Successfully add the diaries!');

        // // return redirect('diariesa'.$diaries->id);
        return redirect()->route('register.create',$register->divisions_ct_id); 
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
    // public function edit($companies_id)
    // {
    //     // $register = Divisions_contact::all();
    //     // dd($register);
    //     return view('officer.accountedit', compact('register'));
    // }

    public function edit($companies_id)
    {
        //
        $register = Companies::find($companies_id);
        $dv = Divisions_contacts::all();

        // return view('officer.accountedit')->withregister($register,$dv);
        return view('officer.accountedit', compact('register','dv'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $companies_id)
    {
         //Validate
         $request->validate([

            'companies_name' => 'required',
             'email' => 'required',
            'address' => 'required',  
            'website' => 'required',
            'divisions_ct_id' => 'required',
        ]);

        $register = Companies::find($companies_id);

        
        $register->companies_name = $request->input('companies_name');
        $register->email = $request->input('email');
        $register->address = $request->input('address');
        $register->website = $request->input('website');
        $register->divisions_ct_id = $request->input('divisions_ct_id');



        
        $register->save();
        $request->session()->flash('success', 'Successfully!');
      //  dd($register);
         return redirect()->route('register.edit',$register->companies_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($companies_id)
    {
        //
        $register = Companies::find($companies_id);

        $register->delete();

        Session::flash('success', 'Successfully!');

        return redirect()->back();
    }
}
