<?php

namespace App\Http\Controllers\company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resume;
// use Cache;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return "Hello";
          
            $value = $request->get('year');
           
            if (!$value) {
                $resumes = Resume::where('created_at','like','%'.$value.'%')
                                ->orderBy('gpa', 'desc')
                                ->get();
            }else {
                $resumes = Resume::where('created_at','like','%'.$value.'%')
                                ->orderBy('gpa', 'desc')
                                ->skip(0)->take(20)
                                ->get();
            }
            
    
                return view('company.resume',compact('resumes'));
    
            
        
    }
    // public function resume(Request $request)
    // {   
    //     $value = $request->get('year');
       
    //     if (!$value) {
    //         $resumes = Resume::where('created_at','like','%'.$value.'%')
    //                         ->orderBy('gpa', 'desc')
    //                         ->get();
    //     }else {
    //         $resumes = Resume::where('created_at','like','%'.$value.'%')
    //                         ->orderBy('gpa', 'desc')
    //                         ->skip(0)->take(20)
    //                         ->get();
    //     }


    //         return view('company.resume',compact('resumes'));

        
    // }
}
