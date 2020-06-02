@extends('layouts.app', ['page' => __('Officer'), 'pageSlug' => 'average_score'])

@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/histogram-bellcurve.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <h4 class="card-header" style="background-color: #89e3fa ">
                <ul class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('white') }}/img/icon/exam.png" style="width: 8%;" alt="homepage" class="img-responsive" />
                        คะแนนประเมินเฉลี่ย
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="form-inline float-right">
                            {{-- <label for="">หาข้อมูลแต่ละปี :&nbsp;</label>
                            <form action="/company/resume" method="get">
                                <select class="form-control mr-sm-2" name="" style="width: 95px;background: #ffffff">
                                    @php $firstYear = (int)date('Y')-5; @endphp
                                    @php $thisYear = $firstYear+5; @endphp
                                    @php for($i=$firstYear;$i<=$thisYear;$i++) 
                                        { 
                                            echo '<option value=' .$i.'>ปี '.$i.'</option>';
                                        }
                                    @endphp
                                </select>
                                <button type="submit" class="btn"><i class="tim-icons icon-zoom-split" aria-hidden="true"></i></button>     
                            </form>     --}}
                            {{-- <a href="{{route('average_score.create')}}"><button class="btn btn-info">บันทึกคะแนนเฉลี่ย</button></a> --}}
                            
                        </div>
                    </div>             
                </ul> 
            </h4>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="card card-chart">
        <div class="card-header" style="background-color: #ffffff ">
            @include('alert._messages')

            
        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>

            <div class="container">
                <div class="card wow bounceInUp">
                    <table class="table table-hover table-striped table-bordered" id="tableaverage">
                        <thead class="table-info text-primary">
                        <tr>
                            {{-- <th class="text-center" scope="col" >ลำดับ</th> --}}
                            <th class="text-center" scope="col" >รหัสนักศึกษา</th>
                            <th class="text-center" scope="col" >ชื่อ-สกุล</th>
                            <th class="text-center" scope="col" >บริษัท</th>
                            <th class="text-center" scope="col" >คะแนนประเมิน</th>
                            <th class="text-center" scope="col">action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($averages as $average)
                            <tr>
                                {{-- <td class="text-center">{{ $average->stu_companies->stu_companies_id }}</td> --}}
                                <td class="text-center">{{ $average->students->code }}</td>
                                <td class="text-left">{{$average->students->stu_name }}</td>
                         <td class="text-center">{{$average->companies->first()->companies_name}}</td> 
                                {{-- แก้ตรงนี้หน่อยชี้ยังไงให้ชื่อบ.ขึ้นอะ --}}
                                 <td class="text-center"> 
                                    @if ($average->score == Null)
                                    <font color="red" >ยังไม่ได้กรอกข้อมูล</font>                                        
                                    @else
                                        {{ $average->score }}
                                    @endif
                                    </td> 
                                     <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('average_score.edit', $average->stu_companies_id)}}">
                                        <button type="button" class="btn btn-warning waves-effect px-3">
                                            <i class="tim-icons icon-pencil" aria-hidden="true"></i>
                                        </button>
                                    </a>&nbsp;
                                    
                                    {!! Form::open(['route' => ['average_score.destroy', $average->stu_companies_id], 'method' => 'DELETE']) !!}
                                    {{-- {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger  px-3','onclick' => 'return confirm('คุณต้องการลบข้อมูลนี้หรือไม่ ?')'] )  }} --}}
                                    <button type="submit" class="btn btn-danger px-3" onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่ ?')"><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </div>
                               </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>
</div>






{{-- <div class="col-12">
    <div class="card card-chart">
        <div class="panel panel-primary">
            <div class="panel-body">    
                 <div class="row"> --}}

                    {{-- <div class="col-md-6"> 
                        {!! $chart->html() !!}
                    </div> --}}
                        {{-- <br/><br/> --}}
    
                        {{-- <div class="col-md-6"> 
                        {!! $bar_chart->html() !!}
                        </div> --}}
    
                        {{-- <br/><br/>
                        <div class="col-md-6"> 
                        {!! $line_chart->html() !!}
                        </div>
                        <br/><br/>
    
                        <div class="col-md-6"> 
                        {!! $areaspline_chart->html() !!}
                        </div>
                        <br/><br/>
    
                        <div class="col-md-6"> 
                        {!! $geo_chart->html() !!}
                        </div>
                        <br/><br/>
    
                        <div class="col-md-6"> 
                        {!! $area_chart->html() !!}
                        </div>
                        <br/><br/>
    
                        <div class="col-md-6"> 
                        {!! $donut_chart->html() !!}
                        </div>
                        <br/><br/>
    
                        <div class="col-md-6"> 
                        {!! $percentage_chart->html() !!}
                        </div> --}}
                    
            {{-- </div>
        </div>
    </div>
</div> --}}
    {{-- {!! Charts::scripts() !!}
    {!! $chart->script() !!}
    {!! $bar_chart->script() !!} --}}







@endsection


@push('scripts')
<script>


$(document).ready(function() {
    $('#tableaverage').DataTable();
} );

//  $data->pluck('score')
//  var data = $data->pluck('score');
 var data = [ 
            @foreach ($data as $item)
            {{$item->score}},
            @endforeach

     
    //  3.5, 3, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3, 3, 4, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3, 3.8, 3.2, 3.7, 3.3, 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2, 3, 2.2, 2.9, 2.9, 3.1, 3, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3, 2.8, 3, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3, 3.4, 3.1, 2.3, 3, 2.5, 2.6, 3, 2.6, 2.3, 2.7, 3, 2.9, 2.9, 2.5, 2.8, 3.3, 2.7, 3, 2.9, 3, 3, 2.5, 2.9, 2.5, 3.6, 3.2, 2.7, 3, 2.5, 2.8, 3.2, 3, 3.8, 2.6, 2.2, 3.2, 2.8, 2.8, 2.7, 3.3, 3.2, 2.8, 3, 2.8, 3, 2.8, 3.8, 2.8, 2.8, 2.6, 3, 3.4, 3.1, 3, 3.1, 3.1, 3.1, 2.7, 3.2, 3.3, 3, 2.5, 3, 3.4, 3
             ];

Highcharts.chart('container', {
    title: {
        text: 'จำนวนนักศึกษาในแต่ละช่วงคะแนน'
    },

    xAxis: [{
        title: { text: 'Data' },
        alignTicks: false,
        opposite:true,
        visible:false
    }, {
        // title: { text: 'คะแนนเฉลี่ย' },
        alignTicks: false,
        //opposite: true
    }],

    yAxis: [{
        title: { text: '' },
        opposite:true,
        visible:false
    }, {
        title: { text: '' },
        //opposite: true
    }],

    plotOptions: {
        histogram: {
            accessibility: {
                pointDescriptionFormatter: function (point) {
                    var ix = point.index + 1,
                        x1 = point.x.toFixed(3),
                        x2 = point.x2.toFixed(3),
                        val = point.y;
                    return ix + '. ' + x1 + ' to ' + x2 + ', ' + val + '.';
                }
            }
        }
    },

    series: [{
        name: 'จำนานนักศึกษา',
        type: 'histogram',
        binsNumber:10,
        xAxis: 1,
        yAxis: 1,
        baseSeries: 's1',
        zIndex: -1
    }
    , {
        name: '',
        type: 'scatter',
        data: data,
        id: 's1',
        marker: {
            radius:0
        }
    }]
});


</script>
@endpush