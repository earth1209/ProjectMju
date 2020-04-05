<?php

namespace App\Http\Controllers;
use DB;
use App\Recruits_news;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $recruits_news = Recruits_news::latest()->paginate(10);
        return view('dashboard', compact('recruits_news'));
    }
}
