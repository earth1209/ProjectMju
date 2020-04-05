<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use DB;
use App\Recruits_news;

class AdminController extends Controller
{
    public function index()
    {
        $recruits_news = Recruits_news::latest()->paginate(10);
  
        return view('dashboard',compact('recruits_news'));
        // return view('dashboard');
    }

    public function supertable()
    {
        // return view('admin.tablerightsmanagement');
        $admin = DB::table('accessrights')->get();

       // print_r($admin);
      return view('admin.supertable',['admin'=>$admin]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // //
        // $request->validate([
        //     // 'name_ac' => 'requied',
        //     'officer' => 'requied',
        //     'student' => 'requied',
        //     'teacher' => 'requied',
        //     'company' => 'requied',
        //     'admin' => 'requied',
        //     ]);

        //     $admin = Admin::create([
        //         'officer' =>  $request->officer,
        //         'student' =>  $request->student,
        //         'teacher' =>  $request->teacher,
        //         'company' =>  $request->company,
        //         'admin'  =>  $request->admin,
        //     ]);
            return view('users.tablerightsmanagement');
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
        $request->validate([
            // 'name_ac' => 'requied',
            'officer' => 'requied',
            'student' => 'requied',
            'teacher' => 'requied',
            'company' => 'requied',
            'admin' => 'requied',
            ]);

            $admin = Admin::crate([

                $admin->officer = $request->officer,
                $admin->student = $request->student,
                $admin->teacher = $request->teacher,
                $admin->company = $request->compan,
                $admin->admin = $request->requied
            ]);
            return redirect('/users/'.$admin->id);
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
        // return redirect()->route('users.tablerightsmanagement')->withStatus(__('User successfully updated.'));

        return view('users.tablerightsmanagement',compact('admin',$admin));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        // auth()->admin()->update($request->all());
        // $admin = Admin::find($name_ac);
        // dd($admin);
        return view('users.tablerightsmanagement');

     //   return redirect()->route('users.tablerightsmanagement')->withStatus(__('User successfully updated.'));

        // return view('users.tablerightsmanagement',compact('admin',$admin));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, Admin $admin)
    {
        //
        // $request->validate([
            //  'name_ac' => 'requied',
            // 'officer' => 'requied',
            // 'student' => 'requied',
            // 'teacher' => 'requied',
            // 'company' => 'requied',
            // 'admin' => 'requied',
            // ]);


            // $admin->officer = $request->officer;
            // $admin->student = $request->student;
            // $admin->teacher = $request->teacher;
            // $admin->company = $request->compan;
            // $admin->admin = $request->requied; 
            // $admin->save();

                 

            // $request->session()->flush('message','Successfully modified the Admin!');
            //return redirect()->route('users.tablerightsmanagement')->withStatus(__('User successfully updated.'));

          // return redirect('users.tablerightsmanagement',compact('admin',$admin));
        //    return back()->withStatus(__('Profile successfully updated.'));
            // return view('dashboard');

            auth()->admin()->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Admin $admin)
    {
        //
        $admin->delete();
        $request->session()->flush('message','Successfully modified the Admin!');
        return redirect('users.tablerightsmanagement');

    }

}
