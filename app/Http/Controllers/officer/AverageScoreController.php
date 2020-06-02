<?php

namespace App\Http\Controllers\officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Averages;
use App\Stu_companies;
use Khill\Lavacharts\Lavacharts;
use ConsoleTVs\Charts\Classes\C3\Chart;
use Charts;
use Session;
use App\User;
use ConsoleTVs\Charts\Builder\Chart as BuilderChart;
use ConsoleTVs\Charts\Facades\Charts as FacadesCharts;
use DB;

class AverageScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    
    public function index()

    {
        $data = Stu_companies::whereDate('score','')->get();
        // $chart = Charts::create('line','highcharts')

        // $chart = Charts::database(averages::all(),'bar','highcharts')
                // ->title("คะแนนประเมินเฉลี่ย")
                // ->elementLabel("Average scores")
                // ->dimensions(1000, 500)
                // ->responsive(true)
                // ->labels($data->pluck('score'))
                // ->values($data->pluck('stu_companies_id'));
                // ->groupBy('stu_companies_id');


                // $bar_chart = Charts::create('bar','highcharts')

                // $chart = Charts::database(averages::all(),'bar','highcharts')
                        // ->title("คะแนนประเมินเฉลี่ย")
                        // ->elementLabel("Average scores")
                        // ->dimensions(1000, 500)
                        // ->responsive(true)
                        // ->labels($data->pluck('score'))
                        // ->values($data->pluck('stu_companies_id'));


                $averages = Stu_companies::all();
               // dd($data->pluck('score'));
                // return view('officer.average_score',['chart'=> $chart], compact('averages'));
                return view('officer.average_score',compact( 'averages','data'));


        // $average_scores = Averages::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        // $chart = Charts::database($average_scores, 'bar', 'highcharts')
        //         ->title("Average_scores")
        //         ->elementLabel("scores")
        //         ->dimensions(1000, 500)
        //         ->responsive(true)
        //         ->groupByMonth(date('Y'), true);  
        //      return view('officer.average_score',compact('chart'));


      
        // print_r($average_scores);
        // return view('officer.average_score');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $averages = Stu_companies::paginate(10);
        // print_r($average);
        return view('officer.average_score_crate', compact('averages'));
        // return view('officer.average_score_crate');

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
            'stu_companies_id' => 'required',
            'score' => 'required',
        ]);
        
        $averages = Stu_companies::create([
            'stu_companies_id' => $request->stu_companies_id,
            'score' => $request->score,
            'detail' => $request->detail
        ]);

        Session::flash('success', 'Successfully add the averages!');
        return redirect()->route('average_score.create',$averages->id);

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
    public function edit($stu_companies_id)
    {
        //
        $averages = Stu_companies::find($stu_companies_id);

        return view('officer.average_score_edit')->withaverages($averages);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $stu_companies_id)
    {
        //Validate
        $request->validate([

            'score' => 'required',
            'detail' => 'required',
        ]);

        $averages = Stu_companies::find($stu_companies_id);

        
        $averages->score = $request->input('score');
        $averages->detail = $request->input('detail');
        
        $averages->save();
        $request->session()->flash('success', 'Successfully!');
        return redirect()->route('average_score.edit',$averages->stu_companies_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($stu_companies_id)
    {

        $averages = Stu_companies::find($stu_companies_id);

        $averages->delete();

        Session::flash('success', 'Successfully!');

        return redirect()->back();
    }



}
