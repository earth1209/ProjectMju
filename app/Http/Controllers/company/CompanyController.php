<?php

namespace App\Http\Controllers\company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.dashboard');
    }

    /**
     * Display RESUME page
     *
     * @return \Illuminate\View\View
     */
    public function resume()
    {
        return view('company.resume');
    }




}
